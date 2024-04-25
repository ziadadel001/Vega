<!doctype html>
<html>

<head>

  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title> @yield('title') </title>
  <link rel="stylesheet" href="{{asset('Assets/css/lib/bootstrap.min.css')}}">
  <link rel="shortcut icon" href="{{asset('Assets/img/favIcon.png')}}" type="image/x-icon">


  
  {{-- css nav and side --}}
  <link rel="stylesheet" href="{{asset('Assets/css/useracc.css')}}">
  {{-- css nav and side --}}

  @yield('files')

</head>  

<!-- navbar -->
 <header class="header" id="header">
    <div class="days"><img src="{{asset('Assets/img/fire.png')}}" alt="">
      <p class="m-0 font fw-bolder">150 days</p>
    </div>
    <div class="days"><img src="{{asset('Assets/img/Star 3.png')}}" alt="">
      <p class="m-0 font fw-bolder"> {{ $leaderboard[$userRank - 1]->points }} <span style="color: gainsboro;">/500</span> <span
          style="font-weight: 600px; color: #E98016;">pts</span></p>
    </div>
    <a href="#"> <img src="{{asset('Assets/img/Frame.png')}}" alt=""></a>
    <a href="#"> <img src="{{asset('Assets/img/notification.png')}}" alt=""></a>
    <div class="dropdown" style="margin-right: 30px;">
      <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
        id="dropdownButton" style="border: none;">
        <img src="{{asset('Assets/img/Ellipse 659.png')}}" alt="">
      </button>
      <ul class="dropdown-menu" id="dropdownMenu">
        <li><button class="dropdown-item" type="button">Action</button></li>
        <li><button class="dropdown-item" type="button">Another </button></li>
        <li><button class="dropdown-item" type="button">Something </button></li>
      </ul>
    </div>
    </div>
  </header>
<!-- end navbar -->

<!-- sidebar -->
    <div class="l-navbar" id="nav-bar">
        <nav class="nav" >
          <div> <a href="{{ route('Landing.index') }}" class="nav_logo"> <img src="{{asset('Assets/img/Group.png')}}" alt="" style="width: 60%;">
            </a>
            <div class="nav_list">
              <a href="{{ route('Profile.index') }}" class="nav_link {{ Request::routeIs('Profile.index') ? 'active' : '' }}"> <img src="{{asset('Assets/img/home.png')}}" alt="">
              </a>
              <a href="{{ route('mycourses.create') }}" class="nav_link {{ Request::routeIs('mycourses.create') ? 'active' : '' }}"> <img src="{{asset('Assets/img/Group 1000002628.png')}}" alt="">
              </a>
              <a href="{{route('timeschedule.create')}}" class="nav_link {{ Request::routeIs('timeschedule.create') ? 'active' : '' }}">
                <img src="{{asset('Assets/img/calendar.png')}}" alt=""> <span class="nav_name">Messages</span> </a>
              <a href="{{ route('mycertificates.create') }}" class="nav_link {{ Request::routeIs('mycertificates.create') ? 'active' : '' }} "><img src="{{asset('Assets/img/Frame 48095782.png')}}" alt="">
              </a>
            </div>
          </div> <a href="{{ route('logout.index') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span>
          </a>
        </nav>
      </div>
<!-- end sidebar -->

<!-- content -->

  @yield('content')

<!-- end content -->

<!-- footer -->
 <footer class="text-center text-lg-start bg-white text-muted footer">
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
                <a href="#"><img src="{{asset('Assets/img/Group 1000002613.png')}}" alt="facebook-icon" />
                </a>
              </div>
              <div class="icon">
                <a href="#"><img src="{{asset('Assets/img/Group 1000002611.png')}}" alt="facebook-icon" />
                </a>
              </div>
              <div class="icon">
                <a href="#"><img src="{{asset('Assets/img/Group 1000002612.png')}}" alt="facebook-icon" />
                </a>
              </div>
              <div class="icon">
                <a href="#"><img src="{{asset('Assets/img/Group 1000002614.png')}}" alt="facebook-icon" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <a href="#">
          <img src="{{asset('Assets/img/Logo (1).png')}}" alt="VegaLogoFooter" class="footerLogo pt-3" />
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
<!--footer end-->

<!--js fiels-->
 <script src="{{asset('Assets/js/lib/jquery-3.7.1.min.js')}}"></script>
 <script src="{{asset('Assets/js/lib/popper.min.js')}}"></script>
 <script src="{{asset('Assets/js/lib/bootstrap.js')}}"></script>
 @yield('JS')
<!--js fiels-->

</html>