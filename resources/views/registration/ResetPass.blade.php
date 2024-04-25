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


    <link rel="stylesheet" href="{{ asset('Assets/css/ResetPass.css') }}">
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
                <header class="text1">Reset Password</header>
                <header class="text2">Enter the email you use on Vega
                    and we will send you a link to reset password.</header>
            </div>


            <form action="{{ route('ConReset.post') }}" method="POST" id="form">
                @csrf
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="field input-field">
                    <p>Email</p>
                    <input type="text" placeholder="Email Address" class="input" name="email" id="email" >

                </div>






                <div class="field button-field mt-5">
                    <button type="submit" id="submit">Reset Password</button>
                </div>


                <div class="text-center pt-3">
                    <p><a href="{{ route('Login.create') }}" style="text-decoration: underline; color: #e98016;">Login</a>
                        Or <a href="{{ route('Signup.create') }}" style="text-decoration: underline; color: #e98016;">Sign
                            Up</a></p>
                </div>
            </form>
        </div>
    </section>



@endsection


<!-- </body>

</html> -->
