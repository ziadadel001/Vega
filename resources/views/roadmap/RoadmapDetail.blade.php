@extends('layouts.vega')

@section('Title', 'RoadmapDetail')

@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/css/Roadmap.css') }}">
@endsection

@section('content')
    <!--Roadmap Start-->
    <div class="roadmap">
        <div class="content">
            <div class="roadmapInfo">
                <h1 class="txt1">{{ $roadmap->name }}</h1>
                <p class="txt2">{{ $roadmap->Des }}</p>

                <div class="all">
                    <div class="info">
                        <img src="{{ asset('Assets/img/youtube.png') }}" alt="">
                        <p class="txt11">{{ $roadmap->NumOfCourses }} Courses</p>
                    </div>
                    <div class="info">
                        <img src="{{ asset('Assets/img/uiw_time.png') }}" alt="">
                        <p class="txt11">{{ $roadmap->Duraion }}Hours</p>
                    </div>
                    <div class="info">
                        <img src="{{ asset('Assets/img/fluent_certificate-24-filled.png') }}" alt="">
                        <p class="txt11">Certificate of compilation</p>
                    </div>
                </div>
                <button>Start Your Roadmap</button>

            </div>
            <div class="roadmapImg">
                <img src="{{ asset('Assets/img/DataScience.png') }}" alt="">
            </div>
        </div>

    </div>
    <!--Roadmap End-->
    <!--vertivalProgreess start-->
    <div class="vertical">
        <div class="container  pt-5 road">
            <h1>{{ $roadmap->name }}</h1>
            <p>{{ $roadmap->Des }}</p>
        </div>
        <div class="roads">
            <ul style="padding-top: 40px;"
                class="progress-tracker progress-tracker--text progress-tracker--vertical progress-tracker--spaced ">
                @foreach ($roadmap->steps as $step)
                    <li class="progress-step is-complete d-flex align-items-center">
                        <span class="progress-marker">{{ $step->order }}</span>
                        <span class="progress-text">
                            <div class="step">
                                <div><img src="{{ asset('Assets/img/DataScience.png') }}" alt="" width="282px"
                                        height="182px"></div>
                                <div>
                                    <h1 class="txt3">{{ $step->title }}</h1>
                                    <p class="me-4 txt5">{{ $step->description }}</p>


                                </div>
                            </div>
        </div>

        </span>
        </li>
        @endforeach
        {{-- 
                <li class="progress-step is-complete  d-flex align-items-center">
                    <span class="progress-marker">2</span>
                    <span class="progress-text">
                        <div class="step">
                            <div><img src="{{ asset('Assets/img/ai.png') }}" alt="" width="282px" height="182px">
                            </div>
                            <div>
                                <h1 class="txt3">Introduction to Python</h1>
                                <p class="txt4">By <span>Ahmed Gamal</span></p>
                                <p class="me-4 txt5">Developing your programming skills in Python and teaching you how
                                    to solve problems
                                    by thinking computationally.</p>
                                <div class="d-flex gap-5 div1 ">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-user" style="color: #000000;"></i>
                                        <p class="m-0 txt6">100</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-star" style="color: #ffd800;"></i>
                                        <p class="m-0 txt6">5 (90 student)</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </span>
                </li>

                <li class="progress-step is-complete d-flex align-items-center">
                    <span class="progress-marker">3</span>
                    <span class="progress-text">
                        <div class="step">
                            <div><img src="{{ asset('Assets/img/ai.png') }}" alt="" width="282px" height="182px">
                            </div>
                            <div>
                                <h1 class="txt3">Introduction to Statics</h1>
                                <p class="txt4">By <span>Ahmed Gamal</span></p>
                                <p class="me-4 txt5">Covering descriptive and inferential statistics, as well as
                                    hypothesis testing
                                    techniques and exercises, statistics puts the......</p>
                                <div class="d-flex gap-5 div1 ">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-user" style="color: #000000;"></i>
                                        <p class="m-0 txt6">100</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-star" style="color: #ffd800;"></i>
                                        <p class="m-0 txt6">5 (90 student)</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </span>
                </li>

                <li class="progress-step d-flex align-items-center">
                    <span class="progress-marker">4</span>
                    <span class="progress-text">
                        <div class="step">
                            <div><img src="{{ asset('Assets/img/ai.png ') }}" width=" 282px" height="182px"></div>
                            <div>
                                <h1 class="txt3">Introduction to Statics</h1>
                                <p class="txt4">By <span>Ahmed Gamal</span></p>
                                <p class="me-4 txt5">Covering descriptive and inferential statistics, as well as
                                    hypothesis testing
                                    techniques and exercises, statistics puts the......</p>
                                <div class="d-flex gap-5 div1 ">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-user" style="color: #000000;"></i>
                                        <p class="m-0 txt6">100</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-star" style="color: #ffd800;"></i>
                                        <p class="m-0 txt6">5 (90 student)</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </span>
                </li>
                <li class="progress-step d-flex align-items-center">
                    <span class="progress-marker">5</span>
                    <span class="progress-text">
                        <div class="step">
                            <div><img src="{{ asset('Assets/img/ai.png') }}" alt="" width="282px"
                                    height="182px"></div>
                            <div>
                                <h1>Introduction to Statics</h1>
                                <p>By Ahmed Gamal</p>
                                <p class="me-4">Covering descriptive and inferential statistics, as well as
                                    hypothesis testing
                                    techniques
                                    and exercises, statistics puts the......</p>
                                <div class="d-flex gap-5 div1 ">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-user" style="color: #000000;"></i>
                                        <p class="m-0 txt6">100</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-star" style="color: #ffd800;"></i>
                                        <p class="m-0 txt6">5 (90 student)</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </span>
                </li>

                <li class="progress-step d-flex align-items-center">
                    <span class="progress-marker"><img
                            src="{{ asset('Assets/img/iconamoon_certificate-badge-fill.png') }}" alt=""></span>
                    <span class="progress-text">
                        <div class="step">

                            <div class="finish">
                                <h1 class="txt3">Finish the Track and Become a Certified Data Scientist</h1>
                                <p class="me-4 txt5">Once you acquire the certificates successfully, you will possess
                                    the necessary
                                    skills
                                    for a job as a data scientist, and qualifying for a position will be one step
                                    closer.</p>

                            </div>
                        </div>
                    </span>
                </li> --}}
        </ul>
    </div>
    <div class="start">
        <a href="{{ route('Roadmapstart.create', $roadmap->id) }}" style="text-decoration: none"> <button
                class="start">Start Your Roadmap</button></a>
    </div>
    </div>

@endsection
<!--footer-->
