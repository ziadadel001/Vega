@extends('layouts.Dashboard')
@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/Dashboard/css/Courses.css') }}" />
@endsection
@section('title', 'courses')
@section('Content')
    <section id="content">

        <section class="table__body">



            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" name="checkbox" id="checkbox"> Courses</th>

                        <th> Category </th>
                        <th> Instructor</th>
                        <th> Lesson </th>
                        <th> Price </th>
                        <th> Staus </th>


                    </tr>


                </thead>


                <tbody>
                    @foreach ($courses as $course)
                        <tr>

                            <td class="td1">
                                <input type="checkbox" name="checkbox" id="checkbox">
                                <img src="{{ asset('assets/Dashboard/images/Screenshot (252).png') }}" alt="">

                                <h1>{{ $course->title }}</h1>




                            </td>

                            <td class="td2"> {{ $course->Category }}</td>
                            <td class="td2"> {{ $course->mentor->name }} </td>
                            <td>
                                <p>Total Lesson {{ $course->Num_lessons }} </p>
                            </td>
                            <td class="td2"> {{ $course->price }}

                            </td>
                            <td class="td3" style="background-color: #E4F8FB">{{ $course->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        </div>
    @endsection
