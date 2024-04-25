@extends('layouts.Dashboard')
@section('Files')
    <link rel="stylesheet" href="{{ asset('assets/Dashboard/css/instructor-list.css') }}" />
@endsection
@section('title', 'Mentors')
@section('Content')
    <section id="content">

        <section class="table__body">



            <table>
                <thead>
                    <tr>
                        <th><input type="checkbox" name="checkbox" id="checkbox"> Instructor</th>
                        <th> Phone </th>
                        <th> Country </th>
                        <th> Active Courses</th>
                        <th> Description </th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($mentors as $mentor)
                        <tr>

                            <td class="td1">
                                <input type="checkbox" name="checkbox" id="checkbox">
                                <img src="{{ asset('Assets/Dashboard/img/Frame 78.png') }}" alt="">
                                <div>
                                    <h1>
                                        <a href="#" style="text-decoration: none; color: inherit;">
                                            {{ $mentor->name }}</a>
                                    </h1>
                                    <p>
                                        {{ $mentor->email }}
                                    </p>
                                </div>


                            </td>

                            <td class="td2">
                                {{ $mentor->phone }}
                            </td>
                            <td class="td2">
                                {{ $mentor->country }}
                            </td>
                            <td>
                                <p>
                                    {{ $mentor->courses->count() }} </p>
                            </td>
                            <td class="td2">
                                {{ $mentor->job }}
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </section>

        </div>
    @endsection
