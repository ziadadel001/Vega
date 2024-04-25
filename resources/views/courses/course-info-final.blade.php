@extends('layouts.vega')

@section('Title')
    Course Info Final
@endsection

@section('Files')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/all.min.css') }}">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/master.css') }}">

    <!-- <link rel="icon" type="image/png" href="img/my-logo.png"> -->

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('Assets/css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('Assets/css/course-info-final.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
@endsection




@section('content')
    <main>
        <div class="container">

            <div class="path flex">
                <span class="home"><i class="fa-solid fa-house"></i></span>
                <span class="home-txt">Home</span>
                <span class="angle"><i class="fa-solid fa-angle-right"></i></span>
                <span class="courses">courses</span>
                <span class="angle"><i class="fa-solid fa-angle-right"></i></span>
                <span class="no-code">{{ $course->title }}</span>
            </div>

            <div class="main-grid">

                <!-- Left Grid Content -->
                <div class="grid-content">
                    <div class="grid-main-content">
                        <div class="info txt-color">
                            <h2>{{ $course->title }}</h1>
                                <p>A course by <strong>{{ $course->mentor->name }}</strong>, {{ $course->mentor->job }}</p>
                        </div>

                        <div class="box-rate ele-start gap-10">
                            <span class="best">best seller</span>
                            <div class="like ele-center gap-10">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.39062 18.4902V8.33022C8.39062 7.93022 8.51062 7.54022 8.73062 7.21022L11.4606 3.15022C11.8906 2.50022 12.9606 2.04022 13.8706 2.38022C14.8506 2.71022 15.5006 3.81022 15.2906 4.79022L14.7706 8.06022C14.7306 8.36022 14.8106 8.63022 14.9806 8.84022C15.1506 9.03022 15.4006 9.15022 15.6706 9.15022H19.7806C20.5706 9.15022 21.2506 9.47022 21.6506 10.0302C22.0306 10.5702 22.1006 11.2702 21.8506 11.9802L19.3906 19.4702C19.0806 20.7102 17.7306 21.7202 16.3906 21.7202H12.4906C11.8206 21.7202 10.8806 21.4902 10.4506 21.0602L9.17062 20.0702C8.68062 19.7002 8.39062 19.1102 8.39062 18.4902Z"
                                        fill="#002333" />
                                    <path
                                        d="M5.21 6.37988H4.18C2.63 6.37988 2 6.97988 2 8.45988V18.5199C2 19.9999 2.63 20.5999 4.18 20.5999H5.21C6.76 20.5999 7.39 19.9999 7.39 18.5199V8.45988C7.39 6.97988 6.76 6.37988 5.21 6.37988Z"
                                        fill="#002333" />
                                </svg>
                                <span>{{ $course->rate * 20 }}% positive reviews (80)</span>
                            </div>
                            <div class="person-rate ele-center gap-10">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                        fill="#002333" />
                                    <path
                                        d="M12.0002 14.5C6.99016 14.5 2.91016 17.86 2.91016 22C2.91016 22.28 3.13016 22.5 3.41016 22.5H20.5902C20.8702 22.5 21.0902 22.28 21.0902 22C21.0902 17.86 17.0102 14.5 12.0002 14.5Z"
                                        fill="#002333" />
                                </svg>
                                <span>{{ $course->students }} students</span>
                            </div>
                        </div>

                        <div class="main-tabs">
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'overview')"
                                    id="defaultOpen">Overview</button>
                                <button class="tablinks" onclick="openCity(event, 'content')">Content</button>
                                <button class="tablinks review" onclick="openCity(event, 'review')">Review <span
                                        class="rate">60</span></button>
                            </div>

                            <!-- Tap2 -->
                            <div id="overview" class="tabcontent">
                                <div class="image relative">
                                    <img src="{{ asset('Assets/img/overview.jpeg') }}" alt="">
                                    <span class="video absolute">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M42.5532 30.7446L29.2638 21.0843C29.025 20.9102 28.7428 20.8056 28.4482 20.782C28.1537 20.7584 27.8584 20.8167 27.595 20.9505C27.3316 21.0843 27.1103 21.2884 26.9557 21.5401C26.801 21.7919 26.719 22.0815 26.7188 22.377V41.6914C26.7179 41.9873 26.7992 42.2776 26.9537 42.53C27.1081 42.7824 27.3297 42.987 27.5936 43.1208C27.8575 43.2546 28.1535 43.3125 28.4484 43.288C28.7433 43.2635 29.0256 43.1575 29.2638 42.982L42.5532 33.3301C42.7585 33.1828 42.9258 32.9887 43.0412 32.7639C43.1566 32.5391 43.2168 32.2901 43.2168 32.0374C43.2168 31.7847 43.1566 31.5356 43.0412 31.3108C42.9258 31.086 42.7585 30.8919 42.5532 30.7446Z"
                                                fill="#5634AE" />
                                            <path
                                                d="M32.0011 0C14.3244 0 0 14.3244 0 32.0011C0 49.6713 14.3244 63.9915 32.0011 63.9915C49.6734 63.9915 64 49.6692 64 32.0011C64.0021 14.3244 49.6734 0 32.0011 0ZM32.0011 58.6523C17.2805 58.6523 5.34558 46.7238 5.34558 32.0011C5.34558 17.2847 17.2805 5.34132 32.0011 5.34132C46.7195 5.34132 58.6523 17.2826 58.6523 32.0011C58.6544 46.7238 46.7195 58.6523 32.0011 58.6523Z"
                                                fill="#5634AE" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="data-overview">
                                    <div class="info-overview">
                                        <h3>Who is this online course for?</h3>
                                        <p>{{ $course->about }}</p>
                                    </div>
                                    <div class="info-overview mt-30">
                                        <h3>What will you learn in this online course?</h3>
                                        <p> {{ $course->Benfites }}</p>
                                    </div>
                                </div>
                                <div class="gallery-overview">
                                    <div class="txt main-color">{{ $course->Num_lessons }} lessons & downloads</div>
                                    <div class="boxs-gallery">
                                        <div class="box">
                                            <div class="image relative">
                                                <img src="{{ asset('Assets/img/gallery-1.jpeg') }}" alt="">
                                                <span class="video absolute">
                                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M42.5532 30.7446L29.2638 21.0843C29.025 20.9102 28.7428 20.8056 28.4482 20.782C28.1537 20.7584 27.8584 20.8167 27.595 20.9505C27.3316 21.0843 27.1103 21.2884 26.9557 21.5401C26.801 21.7919 26.719 22.0815 26.7188 22.377V41.6914C26.7179 41.9873 26.7992 42.2776 26.9537 42.53C27.1081 42.7824 27.3297 42.987 27.5936 43.1208C27.8575 43.2546 28.1535 43.3125 28.4484 43.288C28.7433 43.2635 29.0256 43.1575 29.2638 42.982L42.5532 33.3301C42.7585 33.1828 42.9258 32.9887 43.0412 32.7639C43.1566 32.5391 43.2168 32.2901 43.2168 32.0374C43.2168 31.7847 43.1566 31.5356 43.0412 31.3108C42.9258 31.086 42.7585 30.8919 42.5532 30.7446Z"
                                                            fill="#5634AE" />
                                                        <path
                                                            d="M32.0011 0C14.3244 0 0 14.3244 0 32.0011C0 49.6713 14.3244 63.9915 32.0011 63.9915C49.6734 63.9915 64 49.6692 64 32.0011C64.0021 14.3244 49.6734 0 32.0011 0ZM32.0011 58.6523C17.2805 58.6523 5.34558 46.7238 5.34558 32.0011C5.34558 17.2847 17.2805 5.34132 32.0011 5.34132C46.7195 5.34132 58.6523 17.2826 58.6523 32.0011C58.6544 46.7238 46.7195 58.6523 32.0011 58.6523Z"
                                                            fill="#5634AE" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="info-box">
                                                <h5>Influences</h5>
                                                <p>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7109 15.1798L12.6109 13.3298C12.0709 13.0098 11.6309 12.2398 11.6309 11.6098V7.50977"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4 6C2.75 7.67 2 9.75 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C10.57 2 9.2 2.3 7.97 2.85"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>2 minutes, 56 seconds</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="image relative">
                                                <img src="{{ asset('Assets/img/gallery-2.jpeg') }}" alt="">
                                                <span class="video absolute">
                                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M42.5532 30.7446L29.2638 21.0843C29.025 20.9102 28.7428 20.8056 28.4482 20.782C28.1537 20.7584 27.8584 20.8167 27.595 20.9505C27.3316 21.0843 27.1103 21.2884 26.9557 21.5401C26.801 21.7919 26.719 22.0815 26.7188 22.377V41.6914C26.7179 41.9873 26.7992 42.2776 26.9537 42.53C27.1081 42.7824 27.3297 42.987 27.5936 43.1208C27.8575 43.2546 28.1535 43.3125 28.4484 43.288C28.7433 43.2635 29.0256 43.1575 29.2638 42.982L42.5532 33.3301C42.7585 33.1828 42.9258 32.9887 43.0412 32.7639C43.1566 32.5391 43.2168 32.2901 43.2168 32.0374C43.2168 31.7847 43.1566 31.5356 43.0412 31.3108C42.9258 31.086 42.7585 30.8919 42.5532 30.7446Z"
                                                            fill="#5634AE" />
                                                        <path
                                                            d="M32.0011 0C14.3244 0 0 14.3244 0 32.0011C0 49.6713 14.3244 63.9915 32.0011 63.9915C49.6734 63.9915 64 49.6692 64 32.0011C64.0021 14.3244 49.6734 0 32.0011 0ZM32.0011 58.6523C17.2805 58.6523 5.34558 46.7238 5.34558 32.0011C5.34558 17.2847 17.2805 5.34132 32.0011 5.34132C46.7195 5.34132 58.6523 17.2826 58.6523 32.0011C58.6544 46.7238 46.7195 58.6523 32.0011 58.6523Z"
                                                            fill="#5634AE" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="info-box">
                                                <h5>Influences</h5>
                                                <p>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7109 15.1798L12.6109 13.3298C12.0709 13.0098 11.6309 12.2398 11.6309 11.6098V7.50977"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4 6C2.75 7.67 2 9.75 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C10.57 2 9.2 2.3 7.97 2.85"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>2 minutes, 56 seconds</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="image relative">
                                                <img src="{{ asset('Assets/img/gallery-3.jpeg') }}" alt="">
                                                <span class="video absolute">
                                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M42.5532 30.7446L29.2638 21.0843C29.025 20.9102 28.7428 20.8056 28.4482 20.782C28.1537 20.7584 27.8584 20.8167 27.595 20.9505C27.3316 21.0843 27.1103 21.2884 26.9557 21.5401C26.801 21.7919 26.719 22.0815 26.7188 22.377V41.6914C26.7179 41.9873 26.7992 42.2776 26.9537 42.53C27.1081 42.7824 27.3297 42.987 27.5936 43.1208C27.8575 43.2546 28.1535 43.3125 28.4484 43.288C28.7433 43.2635 29.0256 43.1575 29.2638 42.982L42.5532 33.3301C42.7585 33.1828 42.9258 32.9887 43.0412 32.7639C43.1566 32.5391 43.2168 32.2901 43.2168 32.0374C43.2168 31.7847 43.1566 31.5356 43.0412 31.3108C42.9258 31.086 42.7585 30.8919 42.5532 30.7446Z"
                                                            fill="#5634AE" />
                                                        <path
                                                            d="M32.0011 0C14.3244 0 0 14.3244 0 32.0011C0 49.6713 14.3244 63.9915 32.0011 63.9915C49.6734 63.9915 64 49.6692 64 32.0011C64.0021 14.3244 49.6734 0 32.0011 0ZM32.0011 58.6523C17.2805 58.6523 5.34558 46.7238 5.34558 32.0011C5.34558 17.2847 17.2805 5.34132 32.0011 5.34132C46.7195 5.34132 58.6523 17.2826 58.6523 32.0011C58.6544 46.7238 46.7195 58.6523 32.0011 58.6523Z"
                                                            fill="#5634AE" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="info-box">
                                                <h5>Influences</h5>
                                                <p>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7109 15.1798L12.6109 13.3298C12.0709 13.0098 11.6309 12.2398 11.6309 11.6098V7.50977"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4 6C2.75 7.67 2 9.75 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C10.57 2 9.2 2.3 7.97 2.85"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>2 minutes, 56 seconds</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="image relative">
                                                <img src="{{ asset('Assets/img/gallery-4.jpeg') }}" alt="">
                                                <span class="video absolute">
                                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M42.5532 30.7446L29.2638 21.0843C29.025 20.9102 28.7428 20.8056 28.4482 20.782C28.1537 20.7584 27.8584 20.8167 27.595 20.9505C27.3316 21.0843 27.1103 21.2884 26.9557 21.5401C26.801 21.7919 26.719 22.0815 26.7188 22.377V41.6914C26.7179 41.9873 26.7992 42.2776 26.9537 42.53C27.1081 42.7824 27.3297 42.987 27.5936 43.1208C27.8575 43.2546 28.1535 43.3125 28.4484 43.288C28.7433 43.2635 29.0256 43.1575 29.2638 42.982L42.5532 33.3301C42.7585 33.1828 42.9258 32.9887 43.0412 32.7639C43.1566 32.5391 43.2168 32.2901 43.2168 32.0374C43.2168 31.7847 43.1566 31.5356 43.0412 31.3108C42.9258 31.086 42.7585 30.8919 42.5532 30.7446Z"
                                                            fill="#5634AE" />
                                                        <path
                                                            d="M32.0011 0C14.3244 0 0 14.3244 0 32.0011C0 49.6713 14.3244 63.9915 32.0011 63.9915C49.6734 63.9915 64 49.6692 64 32.0011C64.0021 14.3244 49.6734 0 32.0011 0ZM32.0011 58.6523C17.2805 58.6523 5.34558 46.7238 5.34558 32.0011C5.34558 17.2847 17.2805 5.34132 32.0011 5.34132C46.7195 5.34132 58.6523 17.2826 58.6523 32.0011C58.6544 46.7238 46.7195 58.6523 32.0011 58.6523Z"
                                                            fill="#5634AE" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="info-box">
                                                <h5>Influences</h5>
                                                <p>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7109 15.1798L12.6109 13.3298C12.0709 13.0098 11.6309 12.2398 11.6309 11.6098V7.50977"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4 6C2.75 7.67 2 9.75 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C10.57 2 9.2 2.3 7.97 2.85"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>2 minutes, 56 seconds</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="image relative">
                                                <img src="{{ asset('Assets/img/gallery-5.jpeg') }}" alt="">
                                                <span class="video absolute">
                                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M42.5532 30.7446L29.2638 21.0843C29.025 20.9102 28.7428 20.8056 28.4482 20.782C28.1537 20.7584 27.8584 20.8167 27.595 20.9505C27.3316 21.0843 27.1103 21.2884 26.9557 21.5401C26.801 21.7919 26.719 22.0815 26.7188 22.377V41.6914C26.7179 41.9873 26.7992 42.2776 26.9537 42.53C27.1081 42.7824 27.3297 42.987 27.5936 43.1208C27.8575 43.2546 28.1535 43.3125 28.4484 43.288C28.7433 43.2635 29.0256 43.1575 29.2638 42.982L42.5532 33.3301C42.7585 33.1828 42.9258 32.9887 43.0412 32.7639C43.1566 32.5391 43.2168 32.2901 43.2168 32.0374C43.2168 31.7847 43.1566 31.5356 43.0412 31.3108C42.9258 31.086 42.7585 30.8919 42.5532 30.7446Z"
                                                            fill="#5634AE" />
                                                        <path
                                                            d="M32.0011 0C14.3244 0 0 14.3244 0 32.0011C0 49.6713 14.3244 63.9915 32.0011 63.9915C49.6734 63.9915 64 49.6692 64 32.0011C64.0021 14.3244 49.6734 0 32.0011 0ZM32.0011 58.6523C17.2805 58.6523 5.34558 46.7238 5.34558 32.0011C5.34558 17.2847 17.2805 5.34132 32.0011 5.34132C46.7195 5.34132 58.6523 17.2826 58.6523 32.0011C58.6544 46.7238 46.7195 58.6523 32.0011 58.6523Z"
                                                            fill="#5634AE" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="info-box">
                                                <h5>Influences</h5>
                                                <p>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7109 15.1798L12.6109 13.3298C12.0709 13.0098 11.6309 12.2398 11.6309 11.6098V7.50977"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4 6C2.75 7.67 2 9.75 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C10.57 2 9.2 2.3 7.97 2.85"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>2 minutes, 56 seconds</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="image relative">
                                                <img src="{{ asset('Assets/img/gallery-6.jpeg') }}" alt="">
                                                <span class="video absolute">
                                                    <svg width="64" height="64" viewBox="0 0 64 64"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M42.5532 30.7446L29.2638 21.0843C29.025 20.9102 28.7428 20.8056 28.4482 20.782C28.1537 20.7584 27.8584 20.8167 27.595 20.9505C27.3316 21.0843 27.1103 21.2884 26.9557 21.5401C26.801 21.7919 26.719 22.0815 26.7188 22.377V41.6914C26.7179 41.9873 26.7992 42.2776 26.9537 42.53C27.1081 42.7824 27.3297 42.987 27.5936 43.1208C27.8575 43.2546 28.1535 43.3125 28.4484 43.288C28.7433 43.2635 29.0256 43.1575 29.2638 42.982L42.5532 33.3301C42.7585 33.1828 42.9258 32.9887 43.0412 32.7639C43.1566 32.5391 43.2168 32.2901 43.2168 32.0374C43.2168 31.7847 43.1566 31.5356 43.0412 31.3108C42.9258 31.086 42.7585 30.8919 42.5532 30.7446Z"
                                                            fill="#5634AE" />
                                                        <path
                                                            d="M32.0011 0C14.3244 0 0 14.3244 0 32.0011C0 49.6713 14.3244 63.9915 32.0011 63.9915C49.6734 63.9915 64 49.6692 64 32.0011C64.0021 14.3244 49.6734 0 32.0011 0ZM32.0011 58.6523C17.2805 58.6523 5.34558 46.7238 5.34558 32.0011C5.34558 17.2847 17.2805 5.34132 32.0011 5.34132C46.7195 5.34132 58.6523 17.2826 58.6523 32.0011C58.6544 46.7238 46.7195 58.6523 32.0011 58.6523Z"
                                                            fill="#5634AE" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="info-box">
                                                <h5>Influences</h5>
                                                <p>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7109 15.1798L12.6109 13.3298C12.0709 13.0098 11.6309 12.2398 11.6309 11.6098V7.50977"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4 6C2.75 7.67 2 9.75 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C10.57 2 9.2 2.3 7.97 2.85"
                                                            stroke="#6F6C8F" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>2 minutes, 56 seconds</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-overview mt-30">
                                    <h3>Requirements and materials</h3>
                                    <p>To take this course, no prior knowledge of programming, design or Wordpress is
                                        necessary.</p>
                                    <br />
                                    <p>During the course you must have Figma to create your designs. You will work in a
                                        real environment, so you need to contract hosting and domain, in addition to the
                                        Elementor Pro plugin (it is paid).</p>
                                </div>
                            </div>

                            <!-- Tap2 -->
                            <div id="content" class="tabcontent">
                                <h3>content</h3>
                                <p>content is the capital of France.</p>
                            </div>

                            <!-- Tap3 -->
                            <div id="review" class="tabcontent">
                                <h3>review</h3>
                                <p>review is the capital of Japan.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Grid Sidebar -->
                <div class="grid-sidebar">
                    <div class="main-box-grid">
                        <span class="price">{{ $course->price }} EGP</span>
                        <div class="discount">50% Disc. <span>1500 EGp</span></div>
                        <div class="main-btn">
                            <a href={{ route('PaymentCourse.create', $course->id) }}><button class="btn">Buy
                                    Now</button></a>
                            <span class="through">
                                <i class="fa-solid fa-clock"></i> <span>This offer ends in 01h : 00m : 00s</span>
                            </span>
                        </div>

                        <ul class="side-box">
                            <li class="ele-start gap-10">
                                <svg width="20" height="20" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.6875 16.9492V7.63583C7.6875 7.26916 7.7975 6.91166 7.99917 6.60916L10.5017 2.8875C10.8958 2.29166 11.8767 1.87 12.7108 2.18166C13.6092 2.48416 14.205 3.4925 14.0125 4.39083L13.5358 7.38833C13.4992 7.66333 13.5725 7.91083 13.7283 8.10333C13.8842 8.2775 14.1133 8.3875 14.3608 8.3875H18.1283C18.8525 8.3875 19.4758 8.68083 19.8425 9.19416C20.1908 9.68916 20.255 10.3308 20.0258 10.9817L17.7708 17.8475C17.4867 18.9842 16.2492 19.91 15.0208 19.91H11.4458C10.8317 19.91 9.97 19.6992 9.57583 19.305L8.4025 18.3975C7.95333 18.0583 7.6875 17.5175 7.6875 16.9492Z"
                                        fill="#002333" />
                                    <path
                                        d="M4.77844 5.84814H3.83427C2.41344 5.84814 1.83594 6.39814 1.83594 7.75481V16.9765C1.83594 18.3331 2.41344 18.8831 3.83427 18.8831H4.77844C6.19927 18.8831 6.77677 18.3331 6.77677 16.9765V7.75481C6.77677 6.39814 6.19927 5.84814 4.77844 5.84814Z"
                                        fill="#002333" />
                                </svg>
                                <span>{{ $course->rate * 20 }}% positive reviews (80)</span>
                            </li>
                            <li class="ele-start gap-10">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9974 11.0002C13.5287 11.0002 15.5807 8.94813 15.5807 6.41683C15.5807 3.88552 13.5287 1.8335 10.9974 1.8335C8.46609 1.8335 6.41406 3.88552 6.41406 6.41683C6.41406 8.94813 8.46609 11.0002 10.9974 11.0002Z"
                                        fill="#002333" />
                                    <path
                                        d="M10.9966 13.2915C6.40406 13.2915 2.66406 16.3715 2.66406 20.1665C2.66406 20.4232 2.86573 20.6248 3.1224 20.6248H18.8707C19.1274 20.6248 19.3291 20.4232 19.3291 20.1665C19.3291 16.3715 15.5891 13.2915 10.9966 13.2915Z"
                                        fill="#002333" />
                                </svg>
                                <span>{{ $course->students }} students</span>
                            </li>
                            <li class="ele-start gap-10">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.8326 7.13184H1.83594V10.3127H5.8326V7.13184Z" fill="#002333" />
                                    <path
                                        d="M5.82792 5.76597V1.95264C3.73792 2.33764 2.37208 3.68514 1.96875 5.7568H5.80042C5.80958 5.7568 5.81875 5.76597 5.82792 5.76597Z"
                                        fill="#002333" />
                                    <path
                                        d="M5.8326 14.9508V11.6875H1.83594V14.9233H5.7226C5.75927 14.9233 5.79594 14.9417 5.8326 14.9508Z"
                                        fill="#002333" />
                                    <path
                                        d="M20.0325 5.75687C19.6383 3.74937 18.355 2.42937 16.375 1.99854V5.75687H20.0325Z"
                                        fill="#002333" />
                                    <path
                                        d="M14.9948 10.3127V1.84266C14.949 1.8335 14.894 1.8335 14.839 1.8335H7.20312V10.3127H14.9948Z"
                                        fill="#002333" />
                                    <path d="M20.17 11.6875H16.375V14.9233H20.17V11.6875Z" fill="#002333" />
                                    <path d="M16.375 20.0017C18.3367 19.5708 19.62 18.2692 20.0233 16.2983H16.375V20.0017Z"
                                        fill="#002333" />
                                    <path
                                        d="M5.71656 16.2981H1.97656C2.39823 18.3331 3.7549 19.6623 5.82656 20.0473V16.2798C5.7899 16.289 5.75323 16.2981 5.71656 16.2981Z"
                                        fill="#002333" />
                                    <path d="M20.17 7.13184H16.375V10.3127H20.17V7.13184Z" fill="#002333" />
                                    <path
                                        d="M7.20312 11.6875V20.1667H14.839C14.894 20.1667 14.949 20.1667 14.9948 20.1575V11.6875H7.20312Z"
                                        fill="#002333" />
                                </svg>
                                <span>{{ $course->Num_lessons }} lessons</span>
                            </li>
                            <li class="ele-start gap-10">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.1988 7.22978C19.6103 7.78657 19.1373 8.47933 18.445 8.47933H2.83594C2.28365 8.47933 1.83594 8.03161 1.83594 7.47933V5.88516C1.83594 3.6485 3.65094 1.8335 5.8876 1.8335H8.01427C9.50844 1.8335 9.97594 2.31933 10.5718 3.11683L11.8551 4.82183C12.1393 5.19766 12.1759 5.2435 12.7076 5.2435H15.2651C16.8768 5.2435 18.308 6.02416 19.1988 7.22978Z"
                                        fill="#002333" />
                                    <path
                                        d="M19.1543 9.85402C19.7053 9.85401 20.1524 10.2997 20.1543 10.8506L20.1693 15.2626C20.1693 17.9667 17.9693 20.1667 15.2651 20.1667H6.7401C4.03594 20.1667 1.83594 17.9667 1.83594 15.2626V10.8542C1.83594 10.302 2.28364 9.85424 2.83592 9.85424L19.1543 9.85402Z"
                                        fill="#002333" />
                                </svg>
                                <span>26 additional resources (5 files)</span>
                            </li>
                            <li class="ele-start gap-10">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="10" fill="#002333" />
                                    <path
                                        d="M8.27315 10.5463C8.97629 10.5463 9.5463 9.97629 9.5463 9.27315C9.5463 8.57001 8.97629 8 8.27315 8C7.57001 8 7 8.57001 7 9.27315C7 9.97629 7.57001 10.5463 8.27315 10.5463Z"
                                        stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.1403 10.4906C14.8435 10.4906 15.4135 9.92062 15.4135 9.21748C15.4135 8.51434 14.8435 7.94434 14.1403 7.94434C13.4372 7.94434 12.8672 8.51434 12.8672 9.21748C12.8672 9.92062 13.4372 10.4906 14.1403 10.4906Z"
                                        stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7.17188 14.1509C8.06308 15.4325 9.55691 16.2728 11.2375 16.2728C12.918 16.2728 14.4034 15.4325 15.303 14.1509"
                                        stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span>Online and at your pace</span>
                            </li>
                            <li class="ele-start gap-10">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.5003 15.3541C16.3536 15.3541 16.2161 15.3083 16.0877 15.2166C15.7852 14.9874 15.7211 14.5566 15.9503 14.2541C17.3894 12.3383 17.3894 9.66159 15.9503 7.74576C15.7211 7.44326 15.7852 7.01242 16.0877 6.78326C16.3902 6.55409 16.8211 6.61826 17.0503 6.92076C18.8469 9.32242 18.8469 12.6774 17.0503 15.0791C16.9128 15.2624 16.7111 15.3541 16.5003 15.3541Z"
                                        fill="#002333" />
                                    <path
                                        d="M18.1799 17.6459C18.0333 17.6459 17.8958 17.6001 17.7674 17.5084C17.4649 17.2793 17.4008 16.8484 17.6299 16.5459C20.0774 13.2826 20.0774 8.71759 17.6299 5.45425C17.4008 5.15175 17.4649 4.72092 17.7674 4.49175C18.0699 4.26259 18.5008 4.32675 18.7299 4.62925C21.5441 8.37842 21.5441 13.6218 18.7299 17.3709C18.6016 17.5543 18.3908 17.6459 18.1799 17.6459Z"
                                        fill="#002333" />
                                    <path
                                        d="M12.8543 3.46507C11.8276 2.89674 10.5168 3.04341 9.17844 3.87757L6.50177 5.55507C6.31844 5.66507 6.1076 5.72924 5.89677 5.72924H5.04427H4.58594C2.3676 5.72924 1.14844 6.94841 1.14844 9.16674V12.8334C1.14844 15.0517 2.3676 16.2709 4.58594 16.2709H5.04427H5.89677C6.1076 16.2709 6.31844 16.3351 6.50177 16.4451L9.17844 18.1226C9.9851 18.6267 10.7734 18.8742 11.5068 18.8742C11.9834 18.8742 12.4418 18.7642 12.8543 18.5351C13.8718 17.9667 14.4401 16.7842 14.4401 15.2076V6.79257C14.4401 5.21591 13.8718 4.03341 12.8543 3.46507Z"
                                        fill="#002333" />
                                </svg>
                                <span>Audio: {{ $course->Language }}</span>
                            </li>
                            <li class="ele-start gap-10">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.66406 18.8335H18.3307" stroke="#002333" stroke-width="1.5"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M8.125 3.83317V18.8332H11.875V3.83317C11.875 2.9165 11.5 2.1665 10.375 2.1665H9.625C8.5 2.1665 8.125 2.9165 8.125 3.83317Z"
                                        fill="#002333" stroke="#002333" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M5.83333 8.83317C5.83333 7.9165 5.5 7.1665 4.5 7.1665H3.83333C2.83333 7.1665 2.5 7.9165 2.5 8.83317V18.8332H5.83333V15.4957V8.83317Z"
                                        fill="#002333" stroke="#002333" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14.1641 13.0002V18.8335H17.4974V13.0002C17.4974 12.0835 17.1641 11.3335 16.1641 11.3335H15.4974C14.4974 11.3335 14.1641 12.0835 14.1641 13.0002Z"
                                        fill="#002333" stroke="#002333" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span>Level: {{ $course->level }}</span>
                            </li>
                            <li class="ele-start gap-10">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.992 15.8584C14.452 15.8584 13.0311 15.1343 12.1053 13.8601C11.8853 13.5576 11.9495 13.1268 12.252 12.8976C12.5545 12.6684 12.9853 12.7418 13.2145 13.0443C13.8836 13.9518 14.892 14.4743 15.992 14.4743C17.9078 14.4743 19.4753 12.9159 19.4753 10.9909C19.4753 9.06592 17.917 7.50759 15.992 7.50759C14.6903 7.50759 13.462 8.20426 12.7928 9.31342L10.3636 13.3559C9.44698 14.8868 7.76948 15.8309 5.99115 15.8309C3.31448 15.8309 1.13281 13.6493 1.13281 10.9726C1.13281 8.29592 3.31448 6.11426 5.99115 6.11426C7.53115 6.11426 8.95198 6.83842 9.87781 8.11259C10.0978 8.41509 10.0336 8.84592 9.73115 9.07509C9.41948 9.30426 8.99781 9.23092 8.76865 8.92842C8.10865 8.03926 7.10031 7.51676 6.00031 7.51676C4.08448 7.51676 2.51698 9.07509 2.51698 11.0001C2.51698 12.9251 4.07531 14.4834 6.00031 14.4834C7.30198 14.4834 8.53031 13.7868 9.19948 12.6776L11.6286 8.63509C12.5453 7.10426 14.2228 6.16009 16.0011 6.16009C18.6778 6.16009 20.8595 8.34176 20.8595 11.0184C20.8595 13.6951 18.6686 15.8584 15.992 15.8584Z"
                                        fill="#002333" />
                                    <path
                                        d="M5.95833 12.8332C6.97086 12.8332 7.79167 12.0124 7.79167 10.9998C7.79167 9.98732 6.97086 9.1665 5.95833 9.1665C4.94581 9.1665 4.125 9.98732 4.125 10.9998C4.125 12.0124 4.94581 12.8332 5.95833 12.8332Z"
                                        fill="#002333" />
                                    <path
                                        d="M16.0443 12.8332C17.0568 12.8332 17.8776 12.0124 17.8776 10.9998C17.8776 9.98732 17.0568 9.1665 16.0443 9.1665C15.0317 9.1665 14.2109 9.98732 14.2109 10.9998C14.2109 12.0124 15.0317 12.8332 16.0443 12.8332Z"
                                        fill="#002333" />
                                </svg>
                                <span>Unlimited access forever</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr>

            <div class="avatar-box ele-start gap-10 items-start">
                <div class="image">
                    <img src="{{ asset('Assets/img/avatar.jpeg') }}" alt="avatar" class="max-w-full"
                        style="width: 200px;">
                </div>
                <div class="avatar-data">
                    <h3>{{ $course->mentor->name }}</h3>
                    <span>{{ $course->mentor->job }}</span>
                    <ul class="social ele-start gap-10">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul>
                    {{-- <p class="join">Joined October 2022</p> --}}
                </div>
            </div>

            <div class="info-overview">
                <p>His work shows his taste for design and small details. Isa creates delicious, dynamic and visually
                    impressive websites where every little corner is an excuse to surprise.</p>
                <br />
                <p>Isa Macías is a web designer and developer at Melon Blanc. He has been hitting the button for 8 years
                    and working with Wordpress in the creation of incredible web pages.
                </p>
            </div>

        </div>
    </main>
@endsection


@section('Js')
    <script>
        function myFunction() {
            var x = document.getElementById("navs");
            if (x.style.transform === "translateY(0%)") {
                x.style.transform = "translateY(-100%)"; // Move the element off-screen vertically
            } else {
                x.style.transform = "translateY(0%)"; // Bring the element back to its original position
            }
        }

        // Tabs
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('Assets/js/swiper-bundle.min.js') }}"></script>
@endsection
