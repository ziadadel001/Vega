<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\roadmap;
use App\Models\User;
use GuzzleHttp\Promise\Create;

class RoadmapsController extends Controller
{
    public function RoadmapsAction()
    {
        $roadmaps = roadmap::all();
        return view('roadmap.RoadmapPage', ['roadmaps' => $roadmaps]);
    }
    public function ShowOneRoadmap($Roadmapid)
    {
        $roadmap = roadmap::find($Roadmapid);
        return view('roadmap.RoadmapDetail', ['roadmap' => $roadmap]);
    }
    public function startRoadmap($Roadmapid)
    {
        if (!Auth::user()) {
            return redirect(route('Login.create'));
        }
        $user = user::find(Auth::user()->id);
        if ($user) {
            $user->update([
                'Roadmap_id' => $Roadmapid
            ]);
            return redirect(route('Landing.index'))->with('Success', 'sddsafsdfdfd');
        }
        return redirect(route('Landing.index'))->with('error', 'sddsafsdfdfd');
    }
}
