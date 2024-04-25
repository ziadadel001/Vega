@extends('layouts.Dashboard')
@section('title', 'Users')
@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/dashboard/css/users.css') }}">
@endsection
@section('Content')
    <section id="content">

        <section class="table__body">
            <div class="container">
                <p>Users</p>

                <form class="zz">
                    <input type="text" class="search-input" placeholder="Search by name">
                    <button><i class="fas fa-search"></i></button>
                </form>
                <select id="status" name="status">
                    <option>Status</option>
                </select>
                <button class="add">+ ADD</button>


            </div>

            <table>
                <thead>

                    <tr>
                        <th><input type="checkbox" name="checkbox" id="checkbox"> User </th>
                        <th>User Courses</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Track</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="td1">
                                <input type="checkbox" name="checkbox" id="checkbox">
                                <img src="{{ asset('assets/Dashboard/images/Frame 7.png') }}" alt="">
                                <div>
                                    <h1>{{ $user->name }}</h1>
                                    <p>{{ $user->email }}</p>
                                </div>
                            </td>

                            <td class="course-name">
                                <div>
                                    <p>{{ $user->Courses_book->count() }}</p>
                                </div>
                            </td>

                            <td class="td2">{{ $user->phone }}</td>
                            <td class="td2">{{ $user->age }}</td>
                            <td class="td2">{{ $user->track }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        </div>
    @endsection
