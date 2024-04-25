<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('Assets/Dashboard/css/lib/fontawesome-free-6.4.2-web/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Assets/Dashboard/css/nav.css') }}" />

    @yield('Files')
    <title>@yield('title')</title>
</head>

<body onload="myFunction(x)">
    <div id="mySidenav" class="sidenav nav-open">
        <img src="{{ asset('Assets/Dashboard/img/Logo.png') }}" alt="vegaLogo" />
        <ul class="nav-list">
            <li>
                <div class="nav-list-btn active">
                    <img src="{{ asset('Assets/Dashboard/img/nvlogo.png') }}" alt="" style="width: 40px" />
                    <a href="{{ route('Dash.index') }}"
                        class="{{ Request::routeIs('Dash.index') ? 'active' : '' }}">Dashboard</a>
                </div>
            </li>
            <li>
                <div class="nav-list-btn">
                    <img src="{{ asset('Assets/Dashboard/images/UsersNavLogo.png') }}" alt=""
                        style="width: 40px" />
                    <a href="{{ route('DashUsers.create') }}"
                        class="{{ Request::routeIs('DashUsers.create') ? 'active' : '' }}">Users</a>
                </div>
            </li>
            <li>
                <div class="nav-list-btn collapsibles">
                    <div class="nav-list-title">
                        <img src="{{ asset('Assets/Dashboard/images/MentorsNavLogo..png') }}" style="width: 40px"
                            alt="" />
                        <a href="#"
                            class="{{ Request::routeIs('DashMentors.create') ? 'active' : '' }}">Mentors</a>
                    </div>
                    <img src="{{ asset('Assets/Dashboard/images/ArrowIcon.png') }}" class="icon" alt=""
                        style="width: 8px" />
                </div>
                <ul class="content">
                    <li><a href="{{ route('DashMentors.create') }}">Mentors List</a></li>
                    {{-- <li><a href="Mentor_payment.html">Mentors Payment</a></li> --}}
                </ul>
            </li>

            <li>
                <div class="nav-list-btn collapsibles">
                    <img src="{{ asset('Assets/Dashboard/images/CoursesNavLogo.png') }}" style="width: 40px"
                        alt="" />
                    <a href="#" class="{{ Request::routeIs('DashCourses.create') ? 'active' : '' }}">Courses</a>
                    <img src="{{ asset('Assets/Dashboard/images/ArrowIcon.png') }}" class="icon" alt=""
                        style="width: 8px" />
                </div>
                <ul class="content">
                    {{-- <li><a href="">Category</a></li> --}}
                    <li><a href="{{ route('DashCourses.create') }} ">Course List</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="main" class="main-shrink">
        <nav>
            <div class="nav-search">
                <img class="nav-btn" onclick="toggleNav()"
                    src="{{ asset('Assets/Dashboard/img/burger-bar (2).png') }}" />
                <div class="search-bar">
                    <input type="search" name="search" id="search" />
                    <img src="{{ asset('Assets/Dashboard/images/searchIcon.png') }}" alt="" />
                </div>
            </div>
            <div class="nav-profile">
                <img src="{{ asset('Assets/Dashboard/img/ring.png') }}" class="nav-btn" alt="" />
                <img src="{{ asset('Assets/Dashboard/img/message.png') }}" class="nav-btn" alt="" />
                <div class="nav-profile-info">
                    <div class="profile-data">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p>Admin</p>
                    </div>
                    <img src="{{ asset('Assets/Dashboard/images/man.png') }}" alt="" />
                </div>
                <img src="{{ asset('Assets/Dashboard/img/setting.png') }}" class="nav-btn" alt="" />
            </div>
        </nav>
        @yield('Content')
        <script src="{{ asset('Assets/Dashboard/js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.43.0/apexcharts.min.js"></script>

        @yield('Js')
</body>


</html>
