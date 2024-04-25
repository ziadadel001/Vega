<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('Assets/images/favIcon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('Assets/css/lib/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Assets/css/MediaQuery.css') }}" />
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}" />
    {{-- <link rel="stylesheet" href="css/all.min.css">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="css/master.css"> --}}
    @yield('Files')
    <title>@yield('Title')</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container-fluid px-5">
            <a class="navbar-brand pe-lg-3" href="{{ route('Landing.index') }}"><img
                    src="{{ asset('Assets/images/Logo.png') }}" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mb-lg-0 mb-3" id="navbarSupportedContent">
                <ul class="navbar-nav gap-lg-4 gap-2 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold  {{ Request::routeIs('Landing.index') ? 'active' : '' }}"
                            aria-current="page" href="{{ route('Landing.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold  {{ Request::routeIs('Mentors.create', 'ShowMentor.create', 'PaymentMentor.create', 'Payment.create', 'SearchMentor.create') ? 'active' : '' }}"
                            href="{{ route('Mentors.create') }}">Mentors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ Request::routeIs('ConPaymentCourse.create', 'PaymentCourse.create', 'ShowCourse.create', 'Courses.create') ? 'active' : '' }}"
                            href="{{ route('Courses.create') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ Request::routeIs('ShowRoadmap.create', 'Roadmaps.create') ? 'active' : '' }}"
                            href="{{ route('Roadmaps.create') }}">Roadmaps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ Request::routeIs('applyjob.index', 'ShowOneJob.create', 'Jobs.create') ? 'active' : '' }}"
                            href="{{ route('Jobs.create') }}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ Request::routeIs('ShowOneBlog.create', 'Blogs.create') ? 'active' : '' }}"
                            href="{{ route('Blogs.create') }}">Blogs</a>
                    </li>
                </ul>

                <ul class="nav-btns">
                    @auth
                        {{-- <div class="user-desk">
                            <a href="#" class="user-bag user-note"><span><i
                                        class="fa-solid fa-cart-shopping"></i></span></a>
                            <a href="#" class="user-bell user-note"><span><i class="fa-solid fa-bell"></i></span></a>
                            <a href="#" class="user-avatar"><img src="{{ asset('Assets/img/user-avatar.png') }}" alt="user"></a>
                            <button class="dropdown">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.9201 8.9502L13.4001 15.4702C12.6301 16.2402 11.3701 16.2402 10.6001 15.4702L4.08008 8.9502"
                                        stroke="#002333" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div> --}}
                        <li><a href="{{ route('logout.index') }}" class="btn">logout</a></li>
                        <li><a href="{{ route('Profile.index') }}" class="btn primary-btn">Profile</a></li>
                    @else
                        <li><a href="{{ route('Login.create') }}" class="btn">Sign in</a></li>
                        <li><a href="{{ route('Signup.create') }}" class="btn primary-btn">Sign Up</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')






    <!-- FOOTER -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <section>
            <div class="container text-center text-md-start my-5 pt-4">
                <div class="d-md-flex justify-content-between mt-3">
                    <div class="mb-4">
                        <h5 class="mb-3">Platform</h5>
                        <div class="links d-flex flex-column gap-2">
                            <a href="#" class="text-decoration-none text-dark">Browse Mentors</a>
                            <a href="#" class="text-decoration-none text-dark">Browse Courses</a>
                            <a href="#" class="text-decoration-none text-dark">Roadmaps</a>
                            <a href="#" class="text-decoration-none text-dark">Browse Jobs</a>
                            <a href="#" class="text-decoration-none text-dark">Become Mentors</a>
                            <a href="#" class="text-decoration-none text-dark">Become Instructor</a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3">Resources</h5>
                        <div class="links d-flex flex-column gap-2">
                            <a href="#!" class="text-decoration-none text-dark">Blogs</a>
                            <a href="#!" class="text-decoration-none text-dark">Newsletter</a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3">About</h5>
                        <p>
                            <a href="#!" class="text-decoration-none text-dark">About Us</a>
                        </p>
                    </div>

                    <div class="mb-md-0 mb-4">
                        <h5 class="mb-3">Support</h5>
                        <div class="d-flex flex-column gap-2">
                            <a href="#" class="text-decoration-none text-dark">FAQ</a>
                            <a href="#" class="text-decoration-none text-dark">Contact Us</a>
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-md-0 mb-4">
                        <h5 class="mb-3">Social Media</h5>
                        <div class="media__icons d-flex gap-2 justify-content-center">
                            <div class="icon">
                                <a href="#"><img src="{{ asset('Assets/images/footer/facebookIcon.png') }}"
                                        alt="facebook-icon" />
                                </a>
                            </div>
                            <div class="icon">
                                <a href="#"><img src="{{ asset('Assets/images/footer/linkedinIcon.png') }}"
                                        alt="facebook-icon" />
                                </a>
                            </div>
                            <div class="icon">
                                <a href="#"><img src="{{ asset('Assets/images/footer/youtubeIcon.png') }}"
                                        alt="facebook-icon" />
                                </a>
                            </div>
                            <div class="icon">
                                <a href="#"><img src="{{ asset('Assets/images/footer/Xicon.png') }}"
                                        alt="facebook-icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <img src="{{ asset('Assets/images/footer/Logofooter.png') }}" alt="VegaLogoFooter"
                        class="footerLogo pt-3" />
                </a>
            </div>
        </section>
        <!-- Copyright -->
        <div class="d-md-flex gap-5 p-2 border-top container border-2 border-dark">
            <p>Copyrights @ 2023 Vega Inc. All rights reserved</p>
            <a class="text-decoration-none text-dark" href="#">Privacy policy</a>
            <a class="text-decoration-none text-dark" href="#">Cookies policy</a>
            <a class="text-decoration-none text-dark" href="#">Terms</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="{{ asset('Assets/js/lib/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('Assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('Assets/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Assets/js/main.js') }}"></script>
    @yield('Js')
</body>

</html>
