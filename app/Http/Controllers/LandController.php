<?php

namespace App\Http\Controllers;

use App\Models\roadmap;
use Illuminate\Http\Request;
use App\Models\mentor;
use App\Models\course;
use App\Models\blog;

class LandController extends Controller
{

    //! ---The images are done, but the style of them is bullshit ---!//

    public function  LandingAction()
    {
        //Hero section 
        $heroes = mentor::all()->take(3);
        //convert binary image into regular image 
        foreach ($heroes as $hero) {
            $hero->photo = 'data:image/jpg;base64,' . base64_encode($hero->photo);;
        }



        //Courses Section
        $courses = course::all();
        //convert binary image into regular image 
        foreach ($courses as $course) {
            $course->photo = 'data:image/jpeg;base64,' . base64_encode($course->photo);;
        }


        //Mentors Section
        $mentors = mentor::all();
        //convert binary image into regular image 
        foreach ($mentors as $mentor) {
            $mentor->photo = 'data:image/jpeg;base64,' . base64_encode($mentor->photo);;
        }


        //blogs Section
        // * there is relationship between Mentors and Blogs 
        $blogs = blog::all();


        $roadmaps = roadmap::all();


        // return view with data 
        return view('index', [
            'heroes' => $heroes,
            'courses' => $courses,
            'mentors' => $mentors,
            'blogs' => $blogs,
            'roadmaps' => $roadmaps
        ]);
    }
}
