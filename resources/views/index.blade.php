{{-- 
   * heroes   => return just top 3 mentors 
   * courses  => return all courses and data about the course creator  
   * mentors  => return all mentors on DB
   * blogs    => return all blogs and data about the blog creator 
--}}


@extends('layouts.vega')

@section('Title')
    Home
@endsection

@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/css/mentorPayment.css') }}" />

    <link rel="stylesheet" href="{{ asset('Assets/node_modules/@glidejs/glide/dist/css/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Assets/node_modules/@glidejs/glide/dist/css/glide.theme.css') }}" />
@endsection


@section('content')
    <header class="mt-5 container flex-lg-row flex-column">
        <div class="head pt-2">
            <h1>
                Grow your <span class="hColor">skill</span> to advance your
                <span><img src="{{ asset('Assets/images/Star3.jpg') }}" alt="" /></span>
                <span class="hColor">career</span>
                path.
            </h1>
            <p>
                Vega offers mentorship, courses, and a customized roadmaps whatever
                your level . It's a comprehensive platform for goal-oriented
                individuals.
            </p>
            @if (session()->has('Success'))
                <div class="popup px-5 py-4 text-center ">
                    <img src="{{ asset('assets/images/booking-confirmation.svg') }}" alt="booked_Successfully" />
                    <h4>Booked Successfully</h4>
                    <small class="text-muted mb-3">Zoom link will be sent 10 Minutes before the session via Email.
                    </small>
                    <button class="btn-prim ok d-block m-auto mt-3">OK</button>
                </div>
                <div class="overlay "></div>
            @endif
        </div>
        <div class="panels">
            {{--
            
              *  photo from database 
                
                @foreach ($heroes as $hero)
                <img src="{{ $hero->photo }}" />
            @endforeach

            --}}


            <a href="mentorinfo.html" class="panel active"
                style="background-image: url('{{ asset('Assets/images/heroPerson1.jpg') }}')">
                <div class="panel-description">
                    <h3>Mariam Gamal</h3>
                    <p>Data Analyst Mentor</p>
                </div>
            </a>
            <a href="#" class="panel" style="background-image: url('{{ asset('Assets/images/heroPerson2.jpg') }}')">
                <div class="panel-description">
                    <h3>sami Ali</h3>
                    <p>Front-End Mentor</p>
                </div>
            </a>
            <a href="#" class="panel" style="background-image: url('{{ asset('Assets/images/heroPerson3.jpg') }}')">
                <div class="panel-description">
                    <h3>Ahmed Yassin</h3>
                    <p>Back-End Mentor</p>
                </div>
            </a>
        </div>
    </header>

    <!-- FEATURES -->
    <div class="features">
        <div class="container">
            <h2 class="fw-bold pb-5">4 Reasons to choose Vega</h2>
            <div class="featureDivs">
                <a href="#">
                    <div class="feature container">
                        <img src="{{ asset('Assets/images/featuresSection/mentorIcon.png') }}" alt="mentorIcon" />
                        <h5>Mentorship</h5>
                        <p>
                            Vega provides mentorship services to help individuals achieve
                            their personal and professional goals.
                        </p>
                    </div>
                </a>
                <a href="#">
                    <div class="feature container">
                        <img src="{{ asset('Assets/images/featuresSection/coursesIcon.png') }}" alt="coursesIcon" />
                        <h5>Online Courses</h5>
                        <p>
                            Our online courses offer flexible scheduling, enabling you to
                            learn at your own pace.
                        </p>
                    </div>
                </a>
                <a href="#">
                    <div class="feature container">
                        <img src="{{ asset('Assets/images/featuresSection/roadmapIcon.png') }}" alt="roadmapIcon" />
                        <h5>Customized Roadmaps</h5>
                        <p>
                            Our customized roadmap service is tailored to your unique goals
                            and needs, providing you with a clear.
                        </p>
                    </div>
                </a>
                <a href="#">
                    <div class="feature container">
                        <img src="{{ asset('Assets/images/featuresSection/jobIcon.png') }}" alt="jobsIcon" />
                        <h5>Job Recommendation</h5>
                        <p>
                            Our job recommendation service leverages advanced algorithms to
                            match your skills and preferences.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- COURSES -->
    <div class="courses container my-5 pt-5">
        <div class="feature__header">
            <h2 class="m-0">Our Courses</h2>
            <a href="{{ route('Courses.create') }}">Explore all</a>
        </div>
        <div class="container pt-4">
            <div class="glide" id="glide1">
                <div class="glide__track" data-glide-el="track">

                    <ul class="glide__slides">
                        @foreach ($courses as $course)
                            <li class="glide__slide">
                                <div class="card rounded-4 mb-3">
                                    <a href={{ route('ShowCourse.create', $course->id) }} class="overflow-hidden">
                                        <div class="card__img">
                                            <img class="playIcon"
                                                src="{{ asset('Assets/images/coursesSection/playCourseIcon.png') }}"
                                                alt="" />
                                            <img src="{{ asset('Assets/images/coursesSection/coursesPerson.jpg') }}"
                                                class="card-img-top rounded-top-4" loading="lazy" />
                                        </div>
                                    </a>
                                    <div class="container">
                                        <div class="card-body pt-4 pb-2">
                                            <h5 class="card-title pb-2">
                                                {{ $course->title }}
                                            </h5>
                                            <p class="card-text text-muted border-bottom pb-4">
                                                {{ $course->description }}
                                            </p>
                                            <div class="card-text border-bottom pb-1">
                                                <div class="d-flex justify-content-between">
                                                    <p>
                                                        by
                                                        <a href="#"
                                                            class="fw-bold text-decoration-none">{{ $course->mentor->name }}</a>
                                                    </p>
                                                    <p class="fw-bold">{{ $course->price . ' ' }}Egp</p>
                                                </div>
                                            </div>
                                            <div class="card-text d-flex justify-content-between pt-3">
                                                <p>
                                                    <img src="{{ asset('Assets/images/coursesSection/userIcon.png') }}"
                                                        alt="" />
                                                    {{ $course->students }}
                                                </p>
                                                <p>
                                                    <img src="{{ asset('Assets/images/coursesSection/starIcon.png') }}"
                                                        alt="" />
                                                    {{ $course->rate }} (90 Students)
                                                </p>
                                                <a href="#"><img
                                                        src="{{ asset('Assets/images/coursesSection/arrowIcon.png') }}"
                                                        alt="arrowCourses" class="card__img" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        < </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                >
                            </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MENTORS -->
    <div class="courses container my-5 pt-5">
        <div class="feature__header">
            <h2 class="m-0">Our Mentors</h2>
            <a href="{{ route('Mentors.create') }}">Explore all</a>
        </div>
        <div class="container pt-4">
            <div class="glide" id="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach ($mentors as $mentor)
                            <li class="glide__slide">
                                <div class="card rounded-4">
                                    <a href={{ route('ShowMentor.create', $mentor->id) }} class="overflow-hidden">
                                        <div class="card__img">
                                            <img src="{{ $mentor->photo }}" height="372px" weight="281px"
                                                loading="lazy" class="card-img-top rounded-top-4" />
                                        </div>
                                    </a>
                                    <div class="container">
                                        <div class="card-body pt-4 pb-2">
                                            <h5 class="card-title pb-2">{{ $mentor->name }}</h5>
                                            <p class="card-text">
                                                <img src="{{ asset('Assets/images/mentorsSection/briefcase.png') }}"
                                                    alt="" class="mb-1" />
                                                {{ $mentor->job }}
                                            </p>
                                            <p class="card-text pb-4">
                                                <img src="{{ asset('Assets/images/mentorsSection/messages.png') }}"
                                                    alt="" />
                                                {{ $mentor->num_sessions }} Sessions
                                                <a href="#" class="text-decoration-none">(20 Reviews)</a>
                                            </p>
                                            <div class="card-text border-top d-flex justify-content-between">
                                                <div class="exp mx-4 pt-4">
                                                    <p class="mb-0">Experience</p>
                                                    <p class="fw-bold">{{ $mentor->experience }} years</p>
                                                </div>
                                                <div class="vr"></div>
                                                <div class="avg mx-3 pt-4">
                                                    <p class="mb-0">Avg attendance</p>
                                                    <p class="fw-bold">{{ $mentor->attendance }}%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        < </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                >
                            </button>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOGS -->
    <div class="blogs container my-5 pt-5">
        <div class="feature__header">
            <h2 class="m-0">Our Blogs & Articles</h2>
            <a href="{{ route('Blogs.create') }}">Explore all</a>
        </div>
        <div class="container pt-4">
            <div class="glide" id="glide1">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach ($blogs as $blog)
                            <li class="glide__slide">
                                <div class="card rounded-4">
                                    <a href="#" class="overflow-hidden">
                                        <div class="card__img">
                                            <img src="{{ asset('Assets/images/blogsSection/blogImg.jpg') }}"
                                                loading="lazy" class="card-img-top rounded-top-4" />
                                        </div>
                                    </a>
                                    <div class="container">
                                        <div class="card-body pt-4 pb-2">
                                            <a href="#" class="text-decoration-none text-dark">
                                                <h5 class="card-title pb-2 text">
                                                    {{ $blog->title }}
                                                </h5>
                                            </a>
                                            <p class="card-text text-muted">
                                                {{ $blog->content }}
                                            </p>
                                            <div class="card-text pb-4 d-flex gap-2 align-center">
                                                <a href="#">
                                                    <img src="{{ asset('Assets/images/blogsSection/blogPerson.jpg') }}"
                                                        alt="" />
                                                </a>

                                                <div class="blog__writer">
                                                    <a href="#" class="text-decoration-none">
                                                        <p class="fw-bold m-0">{{ $blog->mentor->name }}</p>
                                                    </a>
                                                    <p class="m-0">{{ $blog->updated_at }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        < </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                >
                            </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ROADMAPS -->
    <div class="roadmaps container my-5 pt-5">
        <div class="feature__header">
            <h2 class="m-0">Our Roadmaps</h2>
            <a href="{{ route('Roadmaps.create') }}">Explore all</a>
        </div>
        <div class="container pt-4">
            <div class="glide" id="glide2">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach ($roadmaps as $roadmap)
                            <li class="glide__slide">
                                <div class="card rounded-4">
                                    <a href="{{ route('ShowRoadmap.create', $roadmap->id) }}" class="overflow-hidden">
                                        <div class="card__img">
                                            <img src="{{ asset('Assets/images/roadmapSection/backendRoadmap.jpg') }}"
                                                loading="lazy" class="card-img-top rounded-top-4" />
                                        </div>
                                    </a>
                                    <div class="container">
                                        <div class="card-body pt-4 pb-2">
                                            <a href="#" class="text-decoration-none text-dark">
                                                <h5 class="card-title pb-2 text">{{ $roadmap->name }}</h5>
                                            </a>
                                            <p class="card-text text-muted pb-3">
                                                {{ $roadmap->about }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        < </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                >
                            </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('Js')
    <script src={{ asset('Assets/node_modules/@glidejs/glide/dist/glide.min.js') }}></script>
    <script>
        const popup = document.querySelector(".popup");
        const overlay = document.querySelector(".overlay");
        const okBtn = document.querySelector(".ok");
        okBtn.addEventListener("click", function() {
            popup.classList.add("hidden");
            overlay.classList.add("hidden");
        });
    </script>
    <script>
        /////////
        const config = {
            type: "carousel",
            startAt: 0,
            autoplay: 4000,
            gap: 20,
            perView: 3,
            breakpoints: {
                992: {
                    perView: 2,
                },
                768: {
                    perView: 1,
                    autoplay: 4000,
                },
            },
        };
        const config1 = {
            type: "carousel",
            startAt: 0,
            autoplay: 4000,
            perView: 4,
            breakpoints: {
                992: {
                    perView: 2,
                },
                768: {
                    perView: 1,
                    autoplay: 4000,
                },
            },
        };
        const sliders = document.querySelectorAll("#glide1");
        const sliders2 = document.querySelectorAll("#glide2");
        sliders.forEach((item) => {
            new Glide(item, config).mount();
        });
        sliders2.forEach((item) => {
            new Glide(item, config1).mount();
        });
    </script>
@endsection
