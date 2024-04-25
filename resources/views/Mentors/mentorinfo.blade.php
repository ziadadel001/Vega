@extends('layouts.vega')

@section('Title', 'VEGA - Mentor Info')

@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/css/mentorinfo/mentorinfoMedia.css') }}" />
    <link rel="stylesheet" href="{{ asset('Assets/css/mentorinfo/mentorinfo.css') }}" />
@endsection



@section('content')
    <section class="profile">
        <div class="container pt-4 pb-2">
            <!-- breadcrumb -->
            <div style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb d-flex gap-2">
                    <li class="breadcrumb-item d-flex gap-2">
                        <img src="{{ asset('Assets/images/MentorInfoPage/homeIcon.png') }}" alt="" />
                        <a href="{{ route('Landing.index') }}" class="text-decoration-none text-muted">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('Mentors.create') }}" class="text-decoration-none text-muted">Mentors</a>
                    </li>
                    <li class="breadcrumb-item fw-bold" aria-current="page">
                        {{ $mentor->name }} </li>
                </ol>
            </div>
            <div class="profile__header pt-5">
                <div class="mentor__header--info">
                    <div class="mentor__img">
                        <img src="{{ $mentor->photo }}" class="rounded-circle" height="200px" weight="200px"
                            alt="mentorImage" />
                    </div>
                    <div class="mentor__data">
                        <div class="mentor__data--head d-flex justify-content-between align-items-center">
                            <h1 class="m-0">{{ $mentor->name }}</h1>
                            <div class="topmentor-bagde d-flex gap-1">
                                <img src="{{ asset('Assets/images/MentorInfoPage/topMentorBadge.png') }}" alt="" />
                                <p class="m-0 fw-bold">Top Mentor</p>
                            </div>
                        </div>
                        <p class="fs-4">{{ $mentor->job }}</p>
                        <div class="mentor__data--media d-flex gap-4">
                            <a href="#"><img src="{{ asset('Assets/images/MentorInfoPage/linkedin.png') }}"
                                    alt="" /></a>
                            <a href="#"><img src="{{ asset('Assets/images/MentorInfoPage/X.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile__details gap-5">
            <div class="container d-lg-flex">
                <div class="details mb-5">
                    <div class="tabs__container pt-4">
                        <div class="tab__details tab-style tab--active" data-tab="1">
                            <p class="fw-bold tab--active">Overview</p>
                        </div>
                        <div class="tab__details tab-style" data-tab="2">
                            <p class="tab-p">Reviews <span> {{ $mentor->reviews }}</span></p>
                        </div>
                    </div>
                    <div class="details__content details__content--active details__content--1 pb-5">
                        <div class="overview d-flex flex-column gap-4 pt-3">
                            <div class="xp">
                                <p class="m-0">{{ $mentor->job }}</p>
                                <p class="m-0">{{ $mentor->experience }} years of experience in UX Design</p>
                                <p class="m-0">
                                    Mentoring students and young professionals since 2019
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-2">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/locationIcon.png') }}"
                                        alt="location" />
                                    <p class="m-0">Egypt</p>
                                </div>
                                <div class="d-flex gap-2">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/starIcon.png') }}" alt="star" />
                                    <p class="m-0">{{ $mentor->attendance / 20 }} (Reviews)</p>
                                </div>
                                <div class="d-flex gap-2">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/clockIcon.png') }}" alt="Time" />
                                    <p class="m-0">Active today</p>
                                </div>
                                <div class="d-flex gap-2">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/message-timeIcon.png') }}"
                                        alt="message-time" />
                                    <p class="m-0">Usually respond in a half a day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details__content details__content--2"></div>
                    <div class="hr mt-5"></div>
                </div>
                <div class="sessions pt-4 pb-2">
                    <div class="tabs__container tabs__container--sessions pt-4">
                        <div class="tab tab__sessions tab-style tab--active" data-tab="3">
                            <p class="fw-bold tab--active">Mentorship plans</p>
                        </div>
                        <div class="tab tab__sessions tab-style" data-tab="4">
                            <p class="tab-p fw-bold">sessions</p>
                        </div>
                    </div>
                    <div class="mx-4 mt-3 sessions__content details__content--active details__content--3">
                        <div class="mentor__plan mb-5">
                            <h4>750 Egp /months</h4>
                            <p class="text-muted">
                                Best suited for those who need help landing their 1st UX
                                design job.
                            </p>
                            <div class="d-flex gap-2 mb-3 align-items-center">
                                <img src="{{ asset('Assets/images/MentorInfoPage/phone.png') }}" alt="call" />
                                <p class="m-0">2 calls per month (60min/call)</p>
                            </div>
                            <div class="d-flex gap-2 mb-3 align-items-center">
                                <img src="{{ asset('Assets/images/MentorInfoPage/chat.png') }}" alt="chat" />
                                <p class="m-0">Unlimited Q&A via chat</p>
                            </div>
                            <div class="d-flex gap-2 mb-3 align-items-center">
                                <img src="{{ asset('Assets/images/MentorInfoPage/bag.png') }}" alt="bag" />
                                <p class="m-0">Hands-on support</p>
                            </div>
                            <div class="d-flex gap-2 mb-4 align-items-center">
                                <img src="{{ asset('Assets/images/MentorInfoPage/blackColor.png') }}" alt="clock" />
                                <p class="m-0">Expect responses in 2 days</p>
                            </div>

                            {{-- zzzzzzzzzzzzzzzzzzz --}}
                            <button class="bookBtn mb-3">Apply now</button>
                            <div class="d-flex gap-2 mb-2 align-items-center">
                                <img src="{{ asset('Assets/images/MentorInfoPage/mark.png') }}" alt="mark" />
                                <p class="m-0 text-muted">Flat fee, no hidden costs</p>
                            </div>
                            <div class="d-flex gap-2 mb-2 align-items-center">
                                <img src="{{ asset('Assets/images/MentorInfoPage/fire.png') }}" alt="fire" />
                                <p class="m-0 text-muted">
                                    7 day free trial! Cancel anytime.
                                </p>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <img src="{{ asset('Assets/images/MentorInfoPage/alert.png') }}" alt="alert" />
                                <p class="m-0 text-muted">Only 1 spot left!</p>
                            </div>
                        </div>
                    </div>
                    <div class="mx-4 mt-3 sessions__content details__content--4">
                        <div class="sessions__plan"></div>
                        <h4>Available sessions</h4>
                        <p class="text-muted">
                            Book 1:1 sessions from the options based on your needs
                        </p>
                        <form action="" class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <input type="radio" name="check" id="1" class="mt-2" />
                                <label for="1">
                                    <span class="checkmark"></span>
                                    <p class="mb-1">introductory call</p>
                                    <p class="text-muted m-0">30 mins, 150 Egp per sessions</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <input type="radio" name="check" id="2" class="mt-2" />
                                <label for="2">
                                    <span class="checkmark"></span>
                                    <p class="mb-1">Build a career roadmap</p>
                                    <p class="text-muted m-0">30 mins, 150 Egp per sessions</p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-3">
                                <input type="radio" name="check" id="3" class="mt-2" />
                                <label for="3">
                                    <span class="checkmark"></span>
                                    <p class="mb-1">Portfolio feedback</p>
                                    <p class="text-muted m-0">
                                        5 mins, 500 Egp, weekly, 3 sessions
                                    </p>
                                </label>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-4">
                                <input type="radio" name="check" id="4" class="mt-2" />
                                <label for="4">
                                    <span class="checkmark"></span>
                                    <p class="mb-1">Work review</p>
                                    <p class="text-muted m-0">
                                        60 mins, 500 Egp, fortighty, 3 sessions
                                    </p>
                                </label>
                            </div>

                            <button class="bookBtn">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-white pt-5">
                <div class="container">
                    <div class="bio mb-5">
                        <h5 class="mb-3">Bio</h5>
                        <p style="font-size: 18px">
                            With 15 years of UX leadership experience, I've helped over 250
                            professionals elevate their career through goal-oriented
                            guidance. From tech giants to startups,<span id="dots"
                                style="cursor: pointer; color: #e98016" onclick="readMore()">
                                more...</span><span id="more" style="display: none">
                                my work has impacted 20M+ users worldwide, shaping design
                                organizations, UX teams and users. Born in Iran, raised in
                                Germany, and living in 10+ countries, my design philosophy is
                                rooted in embracing diversity and inclusivity. With a
                                background in Psychology & Design, I offer a holistic
                                approach, guiding you through mindset, career, and skills to
                                reach new career heights. Let's embark on this transformative
                                journey together.</span>
                        </p>
                    </div>
                    <div class="background">
                        <h5 class="mb-4">background</h5>
                        <div class="bg__container d-flex flex-column gap-3 px-5 py-4">
                            <div class="bg d-flex align-items-center justify-content-between">
                                <p class="text-muted">Expertise</p>
                                <div class="bg-content d-flex gap-3 align-items-center">
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">Design</p>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">
                                            Product Research
                                        </p>
                                    </a>
                                    <p class="px-3 py-2 border rounded-3 fw-bold">+1</p>
                                </div>
                            </div>
                            <div class="bg d-flex align-items-center justify-content-between">
                                <p class="text-muted">Disciplines</p>
                                <div class="bg-content d-flex gap-3 align-items-center">
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">
                                            UX Design
                                        </p>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">
                                            Product Design
                                        </p>
                                    </a>
                                    <p class="px-3 py-2 border rounded-3 fw-bold">+3</p>
                                </div>
                            </div>
                            <div class="bg d-flex align-items-center justify-content-between">
                                <p class="text-muted">Industries</p>
                                <div class="bg-content d-flex gap-3 align-items-center">
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">
                                            <img src="{{ asset('Assets/images/MentorInfoPage/tech.png') }}"
                                                alt="" />
                                            Tech
                                        </p>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">
                                            <img src="{{ asset('Assets/images/MentorInfoPage/rocket.png') }}"
                                                alt="" />
                                            Start Up
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="bg d-flex align-items-center justify-content-between">
                                <p class="text-muted">Fluent in</p>
                                <div class="bg-content d-flex gap-3 align-items-center">
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">English</p>
                                    </a>
                                    <a href="#" class="text-decoration-none">
                                        <p class="px-3 py-2 border rounded-3 fw-bold">German</p>
                                    </a>

                                    <p class="px-3 py-2 border rounded-3 fw-bold">+2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience mt-5">
                        <div class="head d-flex justify-content-between">
                            <h5 class="mb-4">
                                Experience
                                <span class="px-2 rounded-4 text-light fw-normal fs-6"
                                    style="background-color: #e98016">9</span>
                            </h5>
                            <a href="#" class="text-decoration-none" style="color: #e98016">View all</a>
                        </div>
                        <div class="xp__container d-flex flex-column gap-3 px-5 py-4">
                            <div class="xp pb-3 d-flex align-items-center justify-content-between">
                                <div class="xp__item d-flex gap-3 align-items-center">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/xpBag.jpg') }}" alt="" />
                                    <div class="xp__item--title">
                                        <p class="fw-bold mb-1">UX Consultant</p>
                                        <p class="text-muted m-0">Self employed</p>
                                    </div>
                                </div>
                                <p class="xp-date m-0">JAN 2018-PRESENT</p>
                            </div>
                            <div class="hr"></div>
                            <div class="xp pb-3 d-flex align-items-center justify-content-between">
                                <div class="xp__item d-flex gap-3 align-items-center">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/xpBag.jpg') }}" alt="" />
                                    <div class="xp__item--title">
                                        <p class="fw-bold mb-1">UX Consultant</p>
                                        <p class="text-muted m-0">Self employed</p>
                                    </div>
                                </div>
                                <p class="xp-date m-0">JAN 2018-PRESENT</p>
                            </div>
                            <div class="hr"></div>
                            <div class="xp pb-3 d-flex align-items-center justify-content-between">
                                <div class="xp__item d-flex gap-3 align-items-center">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/xpBag.jpg') }}" alt="" />
                                    <div class="xp__item--title">
                                        <p class="fw-bold mb-1">UX Consultant</p>
                                        <p class="text-muted m-0">Self employed</p>
                                    </div>
                                </div>
                                <p class="xp-date m-0">JAN 2018-PRESENT</p>
                            </div>
                        </div>
                    </div>
                    <div class="achievment mt-5">
                        <div class="head d-flex justify-content-between">
                            <h5 class="mb-4">
                                Achievments
                                <span class="px-2 rounded-4 text-light fw-normal fs-6"
                                    style="background-color: #e98016">12</span>
                            </h5>
                            <a href="#" class="text-decoration-none" style="color: #e98016">View all</a>
                        </div>
                        <div class="ach__container d-flex flex-column gap-3 px-5 py-4">
                            <div class="ach pb-3 d-flex align-items-center justify-content-between">
                                <div class="ach__item d-flex gap-3 align-items-center">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/achieve.png') }}"
                                        alt="achievement" />
                                    <p class="fw-bold mb-1">300 Mentorship Minutes</p>
                                </div>
                                <p class="ach-date m-0">28 Nov, 2023</p>
                            </div>
                            <div class="hr"></div>
                            <div class="ach pb-3 d-flex align-items-center justify-content-between">
                                <div class="ach__item d-flex gap-3 align-items-center">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/achieve.png') }}"
                                        alt="achievement" />
                                    <p class="fw-bold mb-1">300 Mentorship Minutes</p>
                                </div>
                                <p class="ach-date m-0">28 Nov, 2023</p>
                            </div>
                            <div class="hr"></div>
                            <div class="ach pb-3 d-flex align-items-center justify-content-between">
                                <div class="ach__item d-flex gap-3 align-items-center">
                                    <img src="{{ asset('Assets/images/MentorInfoPage/achieve.png') }}"
                                        alt="achievement" />
                                    <p class="fw-bold mb-1">300 Mentorship Minutes</p>
                                </div>
                                <p class="ach-date m-0">28 Nov, 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- booking form-Popup -->
        <div class="booking hidden px-3 pt-5 overflow-auto">
            <img class="closeBtn" src="{{ asset('Assets/images/MentorInfoPage/close-circle.png') }}" alt="..." />
            <div class="px-lg-2 d-lg-flex gap-3">
                <div class="session__book-info">
                    <div class="session__book-mentordata">
                        <img src="{{ $mentor->photo }}" height="50px" weight="50px" class="float-start me-3"
                            alt="..." />
                        <div class="d-flex flex-column gap-1">
                            <h6 class="m-0">{{ $mentor->name }}</h6>
                            <p class="m-0 text-muted">
                                {{ $mentor->job }}
                            </p>
                        </div>
                    </div>
                    <h6 class="mt-3">Portfolio feedback</h6>
                    <div class="price mt-3">
                        <p class="text-muted mb-2">price</p>
                        <h6>500 Egp</h6>
                    </div>
                    <div class="duration mt-3">
                        <p class="text-muted mb-2">Session duration</p>
                        <h6>45 minutes, Weekly, 3 sessions</h6>
                    </div>
                    <div class="about mt-3">
                        <p class="text-muted mb-2">About</p>
                        <p>
                            Unlock the keys to landing your dream UX job with personalized
                            guidance. Overcome portfolio challenges, nail job interviews,
                            and confidently step into the UX career of your dreams.
                            Challenges: - Struggling to stand out with your portfolio. -
                            Overcoming imposter syndrome.
                        </p>
                    </div>
                </div>
                <div class="vr"></div>
                <div class="booking__steps">
                    <div class="step ps-lg-4" id="step1">
                        <p>step 1 of 3</p>
                        <h4>Select date and time</h4>
                        <p>In your local time zone (Africa/Cairo)</p>
                        <div class="wrapper">
                            <header>
                                <p class="current-date fs-5"></p>
                                <div class="icons">
                                    <span id="prev" class="material-symbols-rounded">
                                        <span id="next" class="material-symbols-rounded">></span>
                                </div>
                            </header>
                            <div class="calendar pb-1">
                                <ul class="weeks m-0">
                                    <li>S</li>
                                    <li>M</li>
                                    <li>T</li>
                                    <li>W</li>
                                    <li>T</li>
                                    <li>F</li>
                                    <li>S</li>
                                </ul>
                                <ul class="days mb-0"></ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <img src="{{ asset('Assets/images/MentorInfoPage/info-circle.png') }}" alt="..." />
                            <p class="m-0 notice-date">This session will be</p>
                        </div>
                        <button class="nextBtn mb-3 btn">Continue</button>
                    </div>
                    <div class="step hidden ps-lg-4" id="step2">
                        <img class="prevBtn" src="{{ asset('Assets/images/MentorInfoPage/arrow-circle-left.png') }}"
                            alt="..." />
                        <p>step 2 of 3</p>
                        <h4>Select available time</h4>
                        <p class="text-muted">In your local time zone (Africa/Cairo)</p>
                        <p class="final-date notice"></p>
                        <div class="slots">
                            <h6 class="pb-2 text-muted">Available time slots</h6>
                            <div class="slots-container d-flex mt-4 gap-3 justify-content-center flex-wrap"></div>
                            <p class="mt-3 fs-6">
                                This session is will be on
                                <span class="result-dateTime notice"></span>
                            </p>
                            <button class="mb-3 nextBtn btn">Continue</button>
                        </div>
                    </div>
                    <!--  -->
                    <div class="step hidden ps-lg-4" id="step3">
                        <img class="prevBtn" src="{{ asset('Assets/images/MentorInfoPage/arrow-circle-left.png') }}"
                            alt="..." />
                        <p>step 3 of 3</p>
                        <h4>Confirming your booking</h4>
                        <div class="confirm-dateTime d-flex gap-4">
                            <!-- <p class="m-0">
                                                                                                                                              <img
                                                                                                                                                src="assets/images/MentorInfoPage/calendar.png"
                                                                                                                                                alt="..."
                                                                                                                                              />
                                                                                                                                              Monday, 7 July 2024
                                                                                                                                            </p>
                                                                                                                                            <p class="m-0">
                                                                                                                                              <img
                                                                                                                                                src="assets/images/MentorInfoPage/clockIcon.png"
                                                                                                                                                alt="..."
                                                                                                                                              />
                                                                                                                                              5:00 Am
                                                                                                                                            </p> -->
                        </div>

                        <div class="confirm">
                            <h6 class="my-4 text-muted">
                                Add your questions on this booking
                            </h6>
                            <form action="{{ route('PaymentMentor.create', $mentor->id) }} " method="POST">
                                @csrf

                                <textarea class="mb-4" placeholder="Write your question"></textarea>
                                <input type="submit" class="mb-3 nextBtn btn mt-5">Continue to payment</input>
                            </form>
                            {{-- <a class="mb-3 nextBtn btn mt-5"
                                href="{{ route('PaymentMentor.create', $mentor->id) }}">Continue
                                to
                                payment</a> --}}
                            <div class="shield d-flex gap-2 align-items-center p-2">
                                <img class="" src="{{ asset('Assets/images/MentorInfoPage/shield-tick.png') }}"
                                    alt="ShieldIcon" />
                                <p class="m-0 text-muted">
                                    Your payment method will only be charged once your booking
                                    is confirmed within 3 days.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay hidden"></div>
    </section>
@endsection


@section('Js')
    <script>
        const tabsDetailsContainer = document.querySelector(".tabs__container");
        const tabsDetails = document.querySelectorAll(".tab__details");
        const tabsDetailsContent = document.querySelectorAll(".details__content");

        const tabsSessionsContainer = document.querySelector(
            ".tabs__container--sessions"
        );
        const tabsSessions = document.querySelectorAll(".tab__sessions");
        const tabsSessionsContent = document.querySelectorAll(".sessions__content");

        const tabsHandle = function(tabs, clicked) {
            //tabs
            tabs.forEach((t) => {
                t.classList.remove("tab--active");
                t.querySelector("p").classList.remove("tab--active");
                t.querySelector("p").classList.add("tab-p");
                t.querySelector("span")?.classList.remove("review--active");
            });
            clicked.classList.add("tab--active");
            clicked.querySelector("p").classList.remove("tab-p");
            clicked.querySelector("p").classList.add("tab--active");
            clicked.querySelector("span")?.classList.add("review--active");
        };
        const contentHandle = function(tabsContent, clicked) {
            tabsContent.forEach((t) => t.classList.remove("details__content--active"));
            document
                .querySelector(`.details__content--${clicked.dataset.tab}`)
                .classList.add("details__content--active");
        };

        tabsDetailsContainer.addEventListener("click", function(e) {
            const clicked = e.target.closest(".tab__details");
            if (!clicked) return;

            //tabs
            tabsHandle(tabsDetails, clicked);

            // content
            contentHandle(tabsDetailsContent, clicked);
        });

        tabsSessionsContainer.addEventListener("click", function(e) {
            const clicked = e.target.closest(".tab__sessions");
            if (!clicked) return;

            // tabs
            tabsHandle(tabsSessions, clicked);

            // content
            contentHandle(tabsSessionsContent, clicked);
        });
        ////////////////////////////////////////////////////////

        //////////////READMORE function/////////////////////////
        function readMore() {
            const dots = document.getElementById("dots");
            const moreText = document.getElementById("more");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                moreText.style.display = "inline";
            }
        }
        ////////////////////////////////////////////////////////

        ////////////////// booking session /////////////////////
        const book = document.querySelectorAll(".bookBtn");
        const close = document.querySelector(".closeBtn");
        const overLay = document.querySelector(".overlay");
        const bookingForm = document.querySelector(".booking");
        const arrDate = [];

        book.forEach((el) =>
            el.addEventListener("click", function() {
                bookingForm.classList.remove("hidden");
                overLay.classList.remove("hidden");
            })
        );
        close.addEventListener("click", function() {
            bookingForm.classList.add("hidden");
            overLay.classList.add("hidden");
        });
        //////////////////////////////////////////////////////

        ////////////////////navigate steps///////////////////
        let currentStep = 1;
        const next = document.querySelectorAll(".nextBtn");
        const prev = document.querySelectorAll(".prevBtn");

        function nextStep() {
            const currentDiv = document.getElementById("step" + currentStep);
            if (arrDate.length != 0) {
                currentDiv.classList.add("hidden");
                currentStep++;
                const nextDiv = document.getElementById("step" + currentStep);
                nextDiv.classList.remove("hidden");
            }
        }

        function prevStep() {
            const currentDiv = document.getElementById("step" + currentStep);
            currentDiv.classList.add("hidden");
            currentStep--;
            const prevDiv = document.getElementById("step" + currentStep);
            prevDiv.classList.remove("hidden");
        }
        next.forEach((el) => {
            el.addEventListener("click", nextStep);
        });
        prev.forEach((el) => el.addEventListener("click", prevStep));
        ////////////////////////////////////////////////////

        //////////////////// calendar /////////////////////
        const daysTag = document.querySelector(".days"),
            currentDate = document.querySelector(".current-date"),
            prevNextIcon = document.querySelectorAll(".icons span"),
            daysContainer = document.querySelector(".calendar"),
            notice = document.querySelector(".notice-date");

        // getting new date, current year and month
        let date = new Date(),
            currYear = date.getFullYear(),
            currMonth = date.getMonth();

        // storing full name of all months in array
        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];

        const renderCalendar = () => {
            let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
                lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
                lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
                lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month

            let liTag = "";

            for (let i = firstDayofMonth; i > 0; i--) {
                // creating li of previous month last days
                liTag += `<li class="inactive day">${lastDateofLastMonth - i + 1}</li>`;
            }

            for (let i = 1; i <= lastDateofMonth; i++) {
                // creating li of all days of current month
                // adding active class to li if the current day, month, and year matched
                let isToday =
                    i === date.getDate() &&
                    currMonth === new Date().getMonth() &&
                    currYear === new Date().getFullYear() ?
                    "active" :
                    "";
                liTag += `<li class="day ${isToday}">${i}</li>`;
            }

            for (let i = lastDayofMonth; i < 6; i++) {
                // creating li of next month first days
                liTag += `<li class="inactive day">${i - lastDayofMonth + 1}</li>`;
            }
            currentDate.innerText =
                `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
            daysTag.innerHTML = liTag;
        };

        //change and navigate the calendar
        prevNextIcon.forEach((icon) => {
            // getting prev and next icons
            icon.addEventListener("click", () => {
                // adding click event on both icons
                // if clicked icon is previous icon then decrement current month by 1 else increment it by 1
                currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

                if (currMonth < 0 || currMonth > 11) {
                    // if current month is less than 0 or greater than 11
                    // creating a new date of current year & month and pass it as date value
                    date = new Date(currYear, currMonth, new Date().getDate());
                    currYear = date.getFullYear(); // updating current year with new date year
                    currMonth = date.getMonth(); // updating current month with new date month
                } else {
                    date = new Date(); // pass the current date as date value
                }
                renderCalendar(); // calling renderCalendar function
            });
        });

        // select session Date

        const selectDate = function() {
            // select a day
            daysContainer.addEventListener("click", function(e) {
                daysTag.childNodes.forEach((el) => el.classList.remove("active"));

                const clicked = e.target.closest(".day");
                if (!clicked) return;

                // set the date with the selected one
                date.setFullYear(currYear, currMonth, clicked.textContent);
                arrDate.push(date);
                clicked.classList.add("active");

                // display selected date
                notice.innerHTML =
                    `This session will be on <span class ="notice">${date.toDateString()}</span>`;

                // display date in slots step
                finalDate.innerHTML = `<span class="text-muted">Date</span>: ${date.toDateString()}`;
                return arrDate;
            });
        };

        renderCalendar();
        selectDate();

        //////////////////////////////////////////////////////

        /////////////////////Time slots//////////////////////
        const slotContainer = document.querySelector(".slots-container");
        const result = document.querySelector(".result-dateTime");
        const finalDate = document.querySelector(".final-date");

        //         const slotsRender = function(slots) {
        //             let time = `5:00`;

        //             const html = `
    //     <p class="slot m-0">${time} AM</p>
    //   `;
        //             for (let i = 0; i < slots; i++) {
        //                 slotContainer.insertAdjacentHTML("beforeend", html);
        //             }
        //         };

        const slotsRender = function(slots) {
            slots.forEach(time => { // Loop through each item in the array
                const html = `<p class="slot m-0">${time}</p>`;
                slotContainer.insertAdjacentHTML("beforeend", html);
            });
        };

        const slots = {!! json_encode($mentor->session) !!}; // Assuming $mentor->session is an array



        const selectSlot = function() {
            const slot = document.querySelectorAll(".slot");
            slotContainer.addEventListener("click", function(e) {
                slot.forEach((el) => el.classList.remove("active"));
                arrDate.length = 1;

                const clicked = e.target.closest(".slot");
                if (!clicked) return;

                clicked.classList.add("active");
                arrDate.push(clicked.textContent);

                // display selected time to the user
                result.textContent = `${arrDate[1]}`;
                displaySessionDate(arrDate);
                localStorage.setItem("dateAndTime", arrDate);
                return arrDate;
            });
        };

        slotsRender(slots);
        selectSlot();
        /////////////////////////////////////////////////////////

        function displaySessionDate(arrDate) {
            const sessionDate = document.querySelector(".confirm-dateTime");
            const html = `<p class="m-0">
  <img
    src={{ asset('assets/images/MentorInfoPage/calendar.png') }}
    alt="..."
  />
  ${arrDate[0].toDateString().split(",")}
</p>
<p class="m-0">
  <img
    src={{ asset('assets/images/MentorInfoPage/clockIcon.png') }}
    alt="..."
  />
  ${arrDate[1]}
</p>
  `;
            sessionDate.insertAdjacentHTML("beforeend", html);
        }
    </script>
@endsection
