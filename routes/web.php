<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AUthController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\MentorsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RoadmapsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;

//?-----------------------------------Authentication--------------------------------//
Route::controller(AUthController::class)->group(function () {
    //*---login---//
    route::get('/Vega/login', 'Login')->name('Login.create');
    route::post('/login', 'LoginPost')->name('Login.post');
    //*---Endlogin---//
    //*---Signup---//
    route::get('/Vega/signup', 'Signup')->name('Signup.create');
    route::post('/signup', 'SignupPost')->name('Signup.post');
    //*---EndSignup---//

    //*---GoogleAuth---//
    Route::controller(GoogleController::class)->group(function () {
        route::get('/Auth/google', 'redirect')->name('Google_Auth.index');
        route::get('/google', 'call_back')->name('Call_back.index');
    });
    //*---EndGoogleAuth---//

    //*---Reset---//
    route::get('/Vega/Reset_Password', 'Reset')->name('Reset.create');
    route::post('/Vega/Reset_Password/Confirm', 'ResetPost')->name('ConReset.post');
    route::get('/Vega/Reset_Password/new_password', 'ShowPassForm')->name('Pass.create');

    //return from mail route incomplete
    route::post('/Vega/Reset_Password/Create_new_password', 'CreateNewPass')->name('PassCreate.Post');
    //*---EndReset---//
    //*---logout---//
    route::get('/logout', 'logout')->name('logout.index');
    //*---EndLogout---//
});


//?------------------------------Landing------------------------------------------//
route::get('/', [LandController::class, 'LandingAction'])->name('Landing.index');


//?------------------------------Dashboard------------------------------------------//
Route::middleware(['redirect.not.authenticated', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        route::get('/', [adminController::class, 'page'])->name('Dash.index');
        route::get('/Courses', [adminController::class, 'Courses'])->name('DashCourses.create');
        route::get('/users', [adminController::class, 'users'])->name('DashUsers.create');
        route::get('/Mentors', [adminController::class, 'Mentors'])->name('DashMentors.create');
    });
});

//?------------------------------Mentors------------------------------------------//
Route::controller(MentorsController::class)->group(function () {
    route::get('/Vega/Mentors', 'MentorsAction')->name('Mentors.create');
    route::get('/Vega/Mentors/{Mentorid}', 'ShowOneMentor')->name('ShowMentor.create');
    route::post('/Vega/Mentors/search', 'Search')->name('SearchMentor.create');
    route::post('/Vega/Mentors/{Mentorid}/Payment', 'PaymentMentorePage')->name('PaymentMentor.create');
    route::post('/Vega/Mentors/{Mentorid}/Payment/confirmation', 'PaymentPage')->name('Payment.create');
});


//?------------------------------Courses------------------------------------------//
Route::controller(CoursesController::class)->group(function () {
    route::get('/Vega/Courses', 'CoursesAction')->name('Courses.create');
    route::get('/Vega/Courses/{courseid}', 'ShowOneCourse')->name('ShowCourse.create');
    route::post('/Vega/Courses/search', 'Search')->name('SearchCourse.create');
    route::get('/Vega/Courses/{courseid}/Payment', 'PaymentCoursePage')->name('PaymentCourse.create');
    route::post('/Vega/Courses/Payment/confirm', 'ConPayment')->name('ConPaymentCourse.create');
});


//?------------------------------Roadmaps------------------------------------------//
Route::controller(RoadmapsController::class)->group(function () {
    route::get('/Vega/Roadmaps', 'RoadmapsAction')->name('Roadmaps.create');
    route::get('/Vega/Roadmap/{Roadmapid}', 'ShowOneRoadmap')->name('ShowRoadmap.create');
    route::get('/Vega/Roadmap/{Roadmapid}/start', 'startRoadmap')->name('Roadmapstart.create');
});



//?------------------------------jobs------------------------------------------//
Route::controller(JobsController::class)->group(function () {
    route::get('/Vega/Jobs', 'JobsAction')->name('Jobs.create');
    route::get('/Vega/Jobs/{Jobid}', 'ShowOneJob')->name('ShowOneJob.create');
    route::get('/Vega/Jobs/apply/done', 'applyjob')->name('applyjob.index');
});




//?------------------------------Blogs------------------------------------------//
Route::controller(BlogsController::class)->group(function () {

    route::get('/Vega/Blogs', 'BlogsAction')->name('Blogs.create');
    route::get('/Vega/Blogs/{Blogid}', 'ShowOneBlog')->name('ShowOneBlog.create');
});


//?------------------------------ user Profile------------------------------------------//

route::get('/Vega/Profile', [ProfileController::class, 'ShowProfile'])->name('Profile.index')->middleware('auth');

//*--------------------User Courses -----------------//
route::get('/Vega/Profile/mycourses', [ProfileController::class, 'ShowCourses'])->name('mycourses.create');
//*--------------------End User Courses -----------------//


//*--------------------Time Schedule -----------------//
route::get('/Vega/Profile/myTimeSchedule', [ProfileController::class, 'ShowTimeSchedule'])->name('timeschedule.create');
//*------------------End Time Schedule ----------------//


//*--------------------User certificates -----------------//
route::get('/Vega/Profile/mycertificates', [ProfileController::class, 'ShowCertificates'])->name('mycertificates.create');
route::get('/Vega/Profile/mycertificates/VegaCertificate/{certificate}', [ProfileController::class, 'ShowONECertificate'])->name('certificate.show');
//*--------------------End User certificates -----------------//


//*--------------------User Roadmaos -----------------//
route::get('/Vega/Profile/myroadmaps', [ProfileController::class, 'ShowRoadmaps'])->name('myroadmaps.create');
//*--------------------End User Roadmaos -----------------//


//?------------------------------  EndUserProfile------------------------------------------//


//?-----------------------------------Test---------------------------------------//

// route::get('/sss', function () {
//     return view('Dashboard.Mentor-list');
// })->name('home');
