@extends('layouts.vega')
@section('Title', 'ResetPassword')

<!-- <!DOCTYPE html>
<html lang="en">

<head> -->
<!-- <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<!-- <title>  </title> -->
@section('Files')


    <link rel="stylesheet" href="{{ asset('Assets/css/ResetPass3.css') }}">
@endsection
<!-- <link rel="shortcut icon" href="img/favIcon.png" type="image/x-icon"> -->

<!-- <link rel="stylesheet" href="Assets/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css"> -->
<!-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->

<!-- </head> -->

<!-- <body> -->


@section('content')


    <section class="containers forms">
        <div class="form login">

            <div class="form-content">
                <header class="text1">Set up personal account</header>
                <header class="text2">Setting up password for:</header>
                <header class="text3">AhmedGamal@gmail.com</header>
            </div>


            <form action="{{ route('PassCreate.Post') }}" method="POST" id="form">
                @csrf
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="field input-field email">
                    <p class="new">New Password <span style="color: #6F6C8F; font-size: 13px;">(Between 8 and 72
                            characters)</span></p>
                    <input type="password" placeholder="New Password " class="input" name="password" id="email"
                        required>
                </div>


                <div class="field input-field  ">
                    <p class="new">New Password Confirm</p>
                    <input type="password" placeholder="New Password Confirm" class="input" name="conpassword"
                        id="email" required>
                </div>






                <div class="field button-field submit">
                    <button type="submit" id="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>



@endsection