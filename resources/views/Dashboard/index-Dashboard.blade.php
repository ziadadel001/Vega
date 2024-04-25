@extends('layouts.Dashboard')
@section('title', 'Landing')
@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/Dashboard/css/nav.css') }}" />
@endsection
@section('Content')
    <!-- MAIN -->
    <main>


        <ul class="box-info">
            <li>

                <img src="{{ asset('Assets/Dashboard/img/clarity_users-line.png') }}" alt=""> <span class="text">
                    <h4>Total Users</h4>
                    <h3>{{ $count['users'] }}</h3>

                </span>
            </li>
            {{-- <li>
                <img src="{{ asset('Assets/Dashboard/img/la_chalkboard-teacher.png') }}" alt=""> <span class="text">
                    <h4>Total Instructors</h4>
                    <h3>000</h3>

                </span>
            </li> --}}
            <li>
                <img src="{{ asset('Assets/Dashboard/img/fluent_person-star-32-regular.png') }}" alt=""> <span
                    class="text">
                    <h4>Total Mentors</h4>
                    <h3>{{ $count['mentors'] }}</h3>

                </span>
            </li>
            <li>
                <img src="{{ 'Assets/Dashboard/img/Frame 161.png' }}" alt=""> <span class="text">
                    <h4>Total Courses</h4>
                    <h3>{{ $count['courses'] }}</h3>
                </span>

            </li>
        </ul>
        <div class="charts">
            {{-- 
            <div class="charts-card">
                <p class="chart-title">Top Categories</p>
                <div id="bar-chart"></div>
            </div>

            <div class="charts-card">
                <p class="chart-title">Enrolment Rate Average</p>
                <div id="area-chart"></div>
            </div>

            <div class="charts-card">
                <p class="chart-title">Earing</p>
                <div id="comp-chart"></div>
            </div>


            <div class="charts-card">
                <p class="chart-title">Top Sales</p>
                <div id="pie-chart"></div>
            </div>
 --}}

            {{-- 
            <div class="charts-card">
                <p class="chart-title">Active Users</p>
                <div id="active-chart">
                    <div class="all-users">
                        <div class="users">
                            <h4>Monthly</h4>
                            <h5><i class="fa-solid fa-up-long" style="color: #83ea06;"></i> 4.25k</h5>
                            <h6>10%</h6>
                        </div>
                        <div class="users">
                            <h4>weekly</h4>
                            <h5><i class="fa-solid fa-up-long fa-rotate-180 " style="color: #ea0628;"></i> 1.20k
                            </h5>
                            <h6>5%</h6>
                        </div>
                        <div class="users">
                            <h4>Daily(AVG)</h4>
                            <h5><i class="fa-solid fa-up-long" style="color: #83ea06;"></i> 0.50%</h5>
                            <h6>10%</h6>
                        </div>
                    </div>

                </div>
            </div>


 --}}
            <div class="table-data">

                <div class="order">
                    <div class="head">
                        <h3>Top Mentors</h3>
                        <i class='bx <i fa-solid fa-magnifying-glass'></i>
                        <i class='bx <i fa-solid fa-filter'></i>
                    </div>
                    <table>

                        <tbody>
                            @foreach ($mentors as $mentor)
                                <tr>
                                    <td>
                                        <img src="{{ asset('Assets/Dashboard/images/Rectangle 1.png') }}">
                                        <div>
                                            <p>{{ $mentor->name }}</p>
                                            <p style="color: grey; font-size: 13px;">{{ $mentor->email }}</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <p style="color: grey; font-size: 13px;">{{ $mentor->reviews }}</p>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>





            </div>
            <div class="table-data">

                <div class="order">
                    <div class="head" style="display: block;">
                        <h3>Top Courses</h3>
                        <p style="font-size: 10px; color: gray; padding-top: 5px;">In last 15 days Buy and sells
                            over view</p>

                    </div>
                    <table>

                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>
                                        <img src="{{ asset('Assets/Dashboard/images/Screenshot (252).png') }}">
                                        <div>
                                            <p>{{ $course->title }}</p>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        <p>{{ $course->price }}</p>
                                        <p style="color: grey; font-size: 13px;">{{ $course->rate }} stars</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>





            </div>




    </main>
@endsection
