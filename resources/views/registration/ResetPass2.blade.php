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


    <link rel="stylesheet" href="{{ asset('Assets/css/ResetPass2.css') }}">
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
                <header class="text1">Email has been sent</header>
                <header class="text2">Please check your email for password recovery link.</header>
            </div>




            <div class="text-center py-4">
                <img src="{{ asset('Assets/img/Email.png') }}">
            </div>







            <div class="text-center pt-1">
                <p><a href="#" style="text-decoration: underline; color: #e98016;">Login</a> Or <a href="#"
                        style="text-decoration: underline; color: #e98016;">Sign Up</a></p>
            </div>

        </div>
    </section>

@endsection


<!-- </body>

</html> -->
