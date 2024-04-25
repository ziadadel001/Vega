<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class CoursesController extends Controller
{
    public function CoursesAction()
    {
        $courses = course::all();
        // @dd($courses);
        return view('courses.course-final', ['courses' => $courses]);
    }
    public function ShowOneCourse($courseid)
    {
        $course = course::find($courseid);
        return view('courses.course-info-final', ['course' => $course]);
    }
    public function PaymentCoursePage($courseid)
    {
        $course = course::find($courseid);
        return view('courses.course-buying-process', ['course' => $course]);
    }
    public function Search(Request $request)
    {
        $searchText = $request->input('search_text');

        $courses = course::where('title', 'like', '%' . $searchText . '%')
            ->orWhere('description', 'like', '%' . $searchText . '%')
            ->get();
        return view('courses.course-final', ['search' => $courses]);
    }

    public function ConPayment(Request $request)
    {
        return $request;
    }
}
