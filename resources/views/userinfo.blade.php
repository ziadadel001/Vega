@extends('layouts.vega')
@section('Title', 'userinfo')
@section('Files')
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Montserrat:wght@300&family=Open+Sans&family=Oswald&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('Assets/fontawesome-free-6.4.2-web/css/all.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('Assets/css/userinfo.css') }}">
@endsection

<!--navbarStart-->

<!--navbarEnd-->
<!--profilestrart-->
@section('content')
    <div class="profile" style="width: 100%; ">
        <div class="home">
            <a href="#"> <i class="fa-solid fa-house" style="color: #e98016;"></i>
            </a>
            <a href="#">Home </a>
            <i class="fa-solid fa-greater-than"></i>
            <a href="#" class="MyProfile"> My Profile</a>


        </div>
        <div class="card">
            <div class="detail">
                <div class="name">
                    <img src="{{ asset('Assets/img/Ellipse 17.png') }}" alt="">
                    <div class="zz">
                        <div></div>
                        <p class="name1">Yousssef Fares</p>
                        <p class="name2">Product Designer</p>
                        <p class="name3">Egypt</p>
                        <div class="media">
                            <a href="#"> <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#"> <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="#"> <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#"> <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- profileend -->
    <!-- AboutStart -->
    <main>
        <aside class="leftside">
            <div class="about">
                <p class="text1">About me</p>
                <p class="text2">Once your resume is on Indeed, you can choose to make it “Public” or “Private.” There
                    are
                    benefits to both
                    options.</p>
                <p class="text3"> When you make your resume public, it is visible to anyone. Visitors to a public
                    resume page
                    can
                    forward, save, or download the resume as a PDF or email you through a secure contact form. Your
                    street
                    address is visible only to you, and your phone number and email address are only visible when you
                    apply for
                    a job.</p>
            </div>
            <div class="skills">
                <p class="text6">Skills</p>
                <div class="skill">
                    <p>Business</p>
                    <p>Marketing</p>
                    <p>Development</p>
                    <p>Founder</p>
                    <p>Html</p>
                    <p>Entrepreneur</p>
                    <p>InterfaceDesign</p>
                    <p>University</p>
                    <p>Technology</p>
                </div>
            </div>


            <div class="work">
                <p class="text8">Work Experience
                </p>
                <div class="work1">

                    <div class="info">
                        <div class="egypt">
                            <img src="{{ asset('Assets/img/info.png') }}" alt=""
                                style="padding-right: 5px; height: 50px;">

                            <div class="content">
                                <p class="text9">Crisis Intervention Specialist
                                </p>
                                <p class="text10">Egypt / Noon</p>
                            </div>
                        </div>
                        <p class="text11">JAN 2018-PRESENT</p>

                    </div>
                    <div class="text12">
                        <p>Minimum 3 shifts a week Monday - Friday with the ability to work an 8 to 9 hour time each
                            week between
                            the hours of 7 A.M. - 7 P.M.
                        </p>

                    </div>


                    <div class="info2">
                        <div class="egypt">
                            <img src="{{ asset('Assets/img/info.png') }}" alt=""
                                style="padding-right: 10px; height: 50px;">

                            <div class="content">
                                <p class="text9">Crisis Intervention Specialist
                                </p>
                                <p class="text10">Egypt / Noon</p>
                            </div>
                        </div>
                        <p class="text11">JAN 2018-PRESENT</p>
                    </div>
                    <div class="text13">
                        <p>Minimum 3 shifts a week Monday - Friday with the ability to work an 8 to 9 hour time each
                            week between
                            the hours of 7 A.M. - 7 P.M.
                        </p>
                    </div>
                </div>

            </div>

            </div>
            <div class="work2">
                <p class="text8">Education
                </p>
                <div class="work1">

                    <div class="info">
                        <div class="egypt">
                            <img src="{{ asset('Assets/img/Frame 4043 (3).png') }}" alt=""
                                style="padding-right: 5px; height: 50px;">

                            <div class="content">
                                <p class="text9">Cairo University
                                </p>
                                <p class="text10">Egypt / Computer Science</p>
                            </div>
                        </div>
                        <p class="text11">SEP 2009-SEP 2013</p>

                    </div>
                    <div class="text16">
                        <p>Healthcare Interest — become an expert on emerging healthcare programs and excited to speak
                            with
                            providers about the future of healthcare.
                        </p>

                    </div>

                </div>

            </div>

            <div class="work3">
                <p class="text8">Licenses & certifications
                </p>
                <div class="work1">

                    <div class="info">
                        <div class="egypt">
                            <img src="{{ asset('Assets/img/Frame 4043 (4).png') }}" alt=""
                                style="padding-right: 5px; height: 50px;">

                            <div class="content">
                                <p class="text9">Color psychology for designers
                                </p>
                                <p class="text10">Uxcel</p>
                            </div>
                        </div>
                        <p class="text11">Issued Nov 2022</p>

                    </div>
                    <div class="text20">
                        <p>Credential ID NYOACS1VL857
                        </p>

                    </div>


                    <div class="info2">
                        <div class="egypt">
                            <img src="{{ asset('Assets/img/Frame 4043 (4).png') }}" alt=""
                                style="padding-right: 10px; height: 50px;">

                            <div class="content">
                                <p class="text9">Ux design fundementals
                                </p>
                                <p class="text10">Mahara-Tech</p>
                            </div>
                        </div>
                        <p class="text11">Issued DES 2022</p>
                    </div>
                    <div class="text21">
                        <p>Credential ID NYOACS1VL857
                        </p>
                    </div>
                </div>

            </div>


        </aside>

        <aside class="rightside" style="margin-top: 20px;">
            <div class="contact">
                <div class="location">
                    <i class="fa-solid fa-location-dot" style="color: #e98016;"></i>
                    <p>Egypt</p>
                </div>
                <p class="text4">My new car is Mercedes.I enjoy changing the ambiance.</p>
                <div class="information">
                    <img src="{{ asset('Assets/img/gmail.png') }}" alt="">
                    <div class="email">
                        <p class="text5">Youssef@outlook.com
                        </p>
                        <p class="text6">Contact Email</p>
                    </div>
                </div>
                <div class="information">

                    <img src="{{ asset('Assets/img/Frame 4043.png') }}" alt="">
                    <div class="email">
                        <p class="text5">012 234 567 8901
                        </p>
                        <p class="text6">Phone</p>
                    </div>

                </div>
                <div class="information">

                    <img src="{{ asset('Assets/img/Frame 4043 (1).png') }}" alt="">
                    <div class="email">
                        <p class="text5">Information technology
                        </p>
                        <p class="text6">Job functions</p>
                    </div>

                </div>
                <button class="btn1">Contact Me</button>
            </div>

        </aside>

    </main>
@endsection


@section('Js')
@endsection
