<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\opportunitie;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function JobsAction()
    {

        $jobs = opportunitie::all(); // Assuming your model is named 'Opportunity'

        foreach ($jobs as $job) {
            $postedDate = Carbon::createFromFormat('Y-m-d H:i:s', $job->created_at); // Assuming 'created_at' contains the posted date
            $daysDifference = $postedDate->diffInDays(Carbon::now());
            if ($daysDifference === 0) {
                $postedAgo = 'Posted today';
            } elseif ($daysDifference === 1) {
                $postedAgo = 'Posted 1 day ago';
            } else {
                $postedAgo = 'Posted ' . round($daysDifference) . ' days ago';
            }

            $job['PostedAgo'] = $postedAgo;
        }
        // @dd($jobs);
        return view('job.job-guest', ['jobs' => $jobs]);
    }
    public function ShowOneJob($Jobid)
    {

        $job = opportunitie::find($Jobid); // Assuming your model is named 'Opportunity'
        return view('job.jobDetails', ['job' => $job]);
    }


    public function applyjob()
    {
        if (!Auth::user()) {
            return redirect(route('Login.create'));
        }

        return redirect(route('Landing.index'))->with('Success', 'sddsafsdfdfd');
    }
}
