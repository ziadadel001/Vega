<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="{{ asset('Assets/img/favIcon.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Montserrat:wght@300&family=Open+Sans&family=Oswald&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/css/lib/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Assets/css/signup.css') }}" />
    <title>sign up</title>


</head>

<body>
    <form action="{{ route('Signup.post') }}" method="POST" id="signupForm">
        @csrf

        <div class="content">
            <div class="form-title">
                <h2>Sign up now and become a <img src="{{ asset('Assets/img/Star 3 (1).png') }}" alt="">star in
                    your field</h2>
            </div>
            <a href="#" style="text-decoration: none">
                <div class="input-field">
                    <button type="button"><img src="{{ asset('Assets/img/google.webp') }}" alt=""
                            class="google">continue With
                        Google</button>
                </div>
            </a>
            <div class="input-field">
                <button><img src="{{ asset('Assets/img/Vector.webp') }}" alt="" class="facebook">Continue With
                    Facebook</button>
            </div>

            <div class="input-field">
                <button><img src="{{ asset('Assets/img/apple.webp') }}" alt="" class="apple">Continue With
                    Apple</button>
            </div>

            <div class="line"></div>
            <div class="mt-5">
                @if ($errors->any())
                    <div class="col-12">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if (session()->has('Success'))
                    <div class="alert alert-Success">{{ session('Success') }}</div>
                @endif
            </div>

            <div class="mail">
                <input type="text" name="fname" id="fName" placeholder="First Name"
                    value='{{ old(' fname') }}' style="border: 2px solid #D1D3D4">
                <div class="error" id="fNameError"></div>

                <input type="text" name="lname" id="lName" placeholder="Last Name" value='{{ old(' lname') }}'
                    style="border: 2px solid #D1D3D4">
                <div class="error" id="lNameError"></div>
            </div>

            {{-- <div class="mail">
                <select name="Gender" id="Gender" style="border: 2px solid #D1D3D4;" value='{{ old(' Gender') }}'>
                    <option value="" disabled selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input type="number" name="age" id="age" placeholder="Age" min="8" max="90"
                    style="border: 2px solid #D1D3D4;" value='{{ old(' age') }}'>
            </div> --}}

            {{-- <div class="number">
        <input id="phone" type="tel" name="tel" style=" border: 2px solid #D1D3D4; width: 100%;" value='{{ old(' tel')
          }}'>
        <input type="tel" name="number" id="number" placeholder="Phone Number" style="border: 2px solid #D1D3D4" ;
          value='{{ old('') }}'>
      </div> --}}
            <input type="text" name="email" id="eAddress" placeholder="Email Address"
                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" style="border: 2px solid #D1D3D4"
                value='{{ old('
                                                                                        eAddress') }}'>


            <div class="error" id="eAddressError"></div>

            <input type="password" name="password" id="password" placeholder="Password"
                style="border: 2px solid #D1D3D4" value='{{ old(' password') }}'>
            <div class="error" id="passwordError"></div>

            <input type="submit" name="" id="signup" value="Sign Up" class="login"
                onclick="validateSignUp()">
        </div>
    </form>


    <div class="bg">
        <img src="{{ asset('Assets/img/Frame-985.webp') }}" height="100%" alt="frame-bg-image" />
    </div>
    <script src="{{ asset('Assets/js/signup.js') }}"></script>
    <script src="{{ asset('Assets/js/lib/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('Assets/js/lib/popper.min.js') }}"></script>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
</body>

</html>
