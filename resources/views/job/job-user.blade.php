@extends('layouts.vega')

@section('Title') Job User @endsection

@section('Files')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

    <!-- Font Awesome File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/all.min.css') }}">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/master.css') }}">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('Assets/css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('Assets/css/job-user.css')}}">
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

            <!-- Search -->
            <div class="search-filter" id="search-filter">

                <div class="right-search">
                    <div class="custom-select">
                        <select>
                            <option value="0" class="first-option">Job Category:</option>
                            <option value="1">Audi</option>
                            <option value="2">BMW</option>
                            <option value="3">Citroen</option>
                            <option value="4">Ford</option>
                            <option value="5">Honda</option>
                            <option value="6">Jaguar</option>
                            <option value="7">Land Rover</option>
                            <option value="8">Mercedes</option>
                            <option value="9">Mini</option>
                            <option value="10">Nissan</option>
                            <option value="11">Toyota</option>
                            <option value="12">Volvo</option>
                        </select>
                    </div>
                    <div class="custom-select">
                        <select>
                            <option value="0" class="first-option">City:</option>
                            <option value="1">Audi</option>
                            <option value="2">BMW</option>
                            <option value="3">Citroen</option>
                            <option value="4">Ford</option>
                            <option value="5">Honda</option>
                            <option value="6">Jaguar</option>
                            <option value="7">Land Rover</option>
                            <option value="8">Mercedes</option>
                            <option value="9">Mini</option>
                            <option value="10">Nissan</option>
                            <option value="11">Toyota</option>
                            <option value="12">Volvo</option>
                        </select>
                    </div>
                    <div class="custom-select">
                        <select>
                            <option value="0" class="first-option">Job Title:</option>
                            <option value="1">Audi</option>
                            <option value="2">BMW</option>
                            <option value="3">Citroen</option>
                            <option value="4">Ford</option>
                            <option value="5">Honda</option>
                            <option value="6">Jaguar</option>
                            <option value="7">Land Rover</option>
                            <option value="8">Mercedes</option>
                            <option value="9">Mini</option>
                            <option value="10">Nissan</option>
                            <option value="11">Toyota</option>
                            <option value="12">Volvo</option>
                        </select>
                    </div>
                </div>

                <div class="left-search">
                    <button class="btn ele-center gap-10">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span>Search</span>
                    </button>
                    <div class="filter">
                        <button class="filter-btn">
                            <span class="txt-filter">Filter</span>
                            <span>
                                <svg width="24" height="15" viewBox="0 0 24 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.125 0.5H22.875C23.1734 0.5 23.4595 0.618526 23.6705 0.829505C23.8815 1.04048 24 1.32663 24 1.625C24 1.92337 23.8815 2.20952 23.6705 2.4205C23.4595 2.63147 23.1734 2.75 22.875 2.75H1.125C0.826631 2.75 0.540483 2.63147 0.329505 2.4205C0.118526 2.20952 0 1.92337 0 1.625C0 1.32663 0.118526 1.04048 0.329505 0.829505C0.540483 0.618526 0.826631 0.5 1.125 0.5ZM4.5 7.625C4.5 7.32663 4.61853 7.04048 4.8295 6.8295C5.04048 6.61853 5.32663 6.5 5.625 6.5H18.375C18.6734 6.5 18.9595 6.61853 19.1705 6.8295C19.3815 7.04048 19.5 7.32663 19.5 7.625C19.5 7.92337 19.3815 8.20952 19.1705 8.42049C18.9595 8.63147 18.6734 8.75 18.375 8.75H5.625C5.32663 8.75 5.04048 8.63147 4.8295 8.42049C4.61853 8.20952 4.5 7.92337 4.5 7.625ZM9 13.625C9 13.3266 9.11853 13.0405 9.3295 12.8295C9.54048 12.6185 9.82663 12.5 10.125 12.5H13.875C14.1734 12.5 14.4595 12.6185 14.6705 12.8295C14.8815 13.0405 15 13.3266 15 13.625C15 13.9234 14.8815 14.2095 14.6705 14.4205C14.4595 14.6315 14.1734 14.75 13.875 14.75H10.125C9.82663 14.75 9.54048 14.6315 9.3295 14.4205C9.11853 14.2095 9 13.9234 9 13.625Z"
                                        fill="#002333" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Main Data -->
            <div class="main-box-net" id="data-container">
                <h1 class="mb-25 reconmmend">Recommended jobs for you</h1>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box card course">
                    <a href="#">
                        <div class="ele-between content-group">
                            <div class="ele-start gap-25">
                                <div class="image-svg">
                                    <svg width="84" height="84" viewBox="0 0 84 84" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M84 72.3333C84 78.778 78.778 84 72.3333 84H11.6667C5.22433 84 0 78.778 0 72.3333V11.6667C0 5.222 5.22433 0 11.6667 0H72.3333C78.778 0 84 5.222 84 11.6667V72.3333Z"
                                            fill="#424242" />
                                        <path
                                            d="M58.3327 14H46.666V68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 58.3327 14 58.3327 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M25.6669 14H37.3335V68.8333C31.5002 68.8333 25.6995 70.028 25.6669 70C25.6342 69.972 25.6669 14 25.6669 14Z"
                                            fill="#B71C1C" />
                                        <path
                                            d="M37.3327 14H25.666L46.666 68.8333C52.4993 68.8333 58.3 70.028 58.3327 70C58.3653 69.972 37.3327 14 37.3327 14Z"
                                            fill="#E53935" />
                                    </svg>
                                </div>
                                <div class="data">
                                    <h3>Junior Graphic designer </h3>
                                    <h5>Netflix</h5>
                                    <div class="info-bottom ele-start gap-25 mt-5">
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-location-dot"></i></span>
                                            <span class="num-item">Egypt</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-border-all"></i></span>
                                            <span class="num-item">Design</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-dollar-sign"></i></span>
                                            <span class="num-item">5000LE-6000LE / month</span>
                                        </div>
                                        <div class="item ele-center gap-5">
                                            <span class="icon-item"><i class="fa-solid fa-clock"></i></span>
                                            <span class="num-item">Posted 2 days Ago</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="apply">
                                <div class="full">Full Time</div>
                                <button class="btn">Apply</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination" id="pagination">
                <a href="#" id="prev"><i class="fa-solid fa-arrow-left"></i></a>
                <a href="#" class="page-link" data-page="1">1</a>
                <a href="#" class="page-link" data-page="2">2</a>
                <a href="#" class="page-link" data-page="3">3</a>
                <a href="#" id="next"><i class="fa-solid fa-arrow-right"></i></a>
                <p id="page-numbers"> </p>
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

        const cardsPerPage = 12; // Number of cards to show per page 
        const dataContainer = document.getElementById('data-container');
        const pagination = document.getElementById('pagination');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const pageNumbers = document.getElementById('page-numbers');
        const pageLinks = document.querySelectorAll('.page-link');

        const cards =
            Array.from(dataContainer.getElementsByClassName('card'));

        // Calculate the total number of pages 
        const totalPages = Math.ceil(cards.length / cardsPerPage);
        let currentPage = 1;

        // Function to display cards for a specific page 
        function displayPage(page) {
            const startIndex = (page - 1) * cardsPerPage;
            const endIndex = startIndex + cardsPerPage;
            cards.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
        // function displayPage(page) {
        //     var count = 0
        //     const startIndex = (page - 1) * cardsPerPage;
        //     const endIndex = startIndex + cardsPerPage;
        //     cards.forEach((card, index) => {
        //         if (index >= startIndex && index < endIndex) {
        //             card.style.display = 'block';
        //         } else {
        //             card.style.display = 'none';
        //             count += 1
        //             console.log(count)
        //             console.log(card)
        //             if (count == card.style.display == 'block'.length) {
        //                 dataContainer.innerHTML = "<p class='empty'>No boxes to display</p>";
        //             }
        //         }
        //     });
        // }

        // Function to update pagination buttons and page numbers 
        function updatePagination() {
            pageNumbers.textContent =
                `Page ${currentPage} of ${totalPages}`;
            prevButton.disabled = currentPage === 1;
            nextButton.disabled = currentPage === totalPages;
            pageLinks.forEach((link) => {
                const page = parseInt(link.getAttribute('data-page'));
                link.classList.toggle('active', page === currentPage);
            });
        }

        // Event listener for "Previous" button 
        prevButton.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                displayPage(currentPage);
                updatePagination();
            }
        });

        // Event listener for "Next" button 
        nextButton.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                displayPage(currentPage);
                updatePagination();
            }
        });

        // Event listener for page number buttons 
        pageLinks.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = parseInt(link.getAttribute('data-page'));
                if (page !== currentPage) {
                    currentPage = page;
                    displayPage(currentPage);
                    updatePagination();
                }
            });
        });


        // Initial page load 
        displayPage(currentPage);
        updatePagination();
    </script>

    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function (e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function (e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }
        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{asset('Assets/js/swiper-bundle.min.js')}}"></script>
@endsection