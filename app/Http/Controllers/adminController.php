<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\mentor;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function page()
    {
        $count = ['mentors' => mentor::count(), 'courses' => course::count(), 'users' => user::count()];
        $mentors = mentor::all()->take(6);
        $Courses = course::all()->take(6);

        return view('Dashboard.index-Dashboard', ['courses' => $Courses, 'mentors' => $mentors, 'count' => $count]);
    }
    public function Courses()
    {
        $Courses = course::all();
        return view('Dashboard.Courses_List', ['courses' => $Courses]);
    }
    public function users()
    {
        $Users = User::all();
        return view('Dashboard.users', ['users' => $Users]);
    }
    public function Mentors()
    {
        $Mentors = mentor::all();
        return view('Dashboard.Mentor-list', ['mentors' => $Mentors]);
    }
}
