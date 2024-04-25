<?php

namespace App\Http\Controllers;

use App\Models\mbook;
use Illuminate\Http\Request;
use App\Models\mentor;
use Illuminate\Support\Facades\Auth;

class MentorsController extends Controller
{
    public function MentorsAction()
    {
        $Mentors = mentor::all();
        foreach ($Mentors as $mentor) {
            $mentor->photo = 'data:image/jpeg;base64,' . base64_encode($mentor->photo);;
        }
        return view('Mentors.Mentors', ['mentors' => $Mentors]);
    }
    public function ShowOneMentor($Mentorid)
    {
        $Mentor = mentor::find($Mentorid);
        $Mentor->photo = 'data:image/jpeg;base64,' . base64_encode($Mentor->photo);;

        $avatime = $Mentor->avatime;
        $ava = explode(',', $avatime);
        $Mentor['session'] = $ava;
        return view('Mentors.mentorinfo', ['mentor' => $Mentor]);
    }
    public function PaymentMentorePage($Mentorid)
    {
        if (!Auth::user()) {
            return redirect(route('Login.create'));
        }

        $Mentor = mentor::find($Mentorid);
        $Mentor->photo = 'data:image/jpeg;base64,' . base64_encode($Mentor->photo);;

        return view('Mentors.mentorPayment', ['mentor' => $Mentor]);
    }
    public function PaymentPage($Mentorid, request $request)
    {
        $booking = mbook::create([
            'user_id' => auth()->user()->id,
            'mentor_id' => $Mentorid,
            'cardname' => $request->cardname,
            'cardnumber' => $request->cardnumber,
            // 'expiredate' => $request->expiredate,
            'CVC' => $request->CVC,
            'phoneNumber' => $request->phoneNumber,
        ]);
        if (!$booking) {
            return redirect(route('Landing.index'))->with('error');
        }
        return redirect(route('Landing.index'))->with('Success', 'sddsafsdfdfd');
    }

    public function Search(Request $request)
    {
        $searchText = $request->input('search_text');

        $mentors = mentor::where('name', 'like', '%' . $searchText . '%')
            ->orWhere('job', 'like', '%' . $searchText . '%')
            ->get();
        return view('Mentors.Mentors', ['search' => $mentors]);
    }
}
