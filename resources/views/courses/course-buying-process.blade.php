@extends('layouts.vega')

@section('Title', 'Course Final')

@section('Files')

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/all.min.css') }}">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/master.css') }}">
    <!-- <link rel="icon" type="image/png" href="img/my-logo.png"> -->

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('Assets/css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('Assets/css/course-buying-process.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
@endsection

<body>


    @section('content')
        <!-- Start Search And Filter -->
        <div class="main">
            <div class="container">
                <section class="main-checkout">
                    <!-- Checkout -->
                    <div class="checkout">
                        <h1>Checkout</h1>
                        <h3>Payment</h3>

                        <div class="check-buy">
                            <section class="radio-section">
                                <h5>Choose payment method</h5>
                                <div class="radio-list">
                                    <div class="radio-item"><input name="radio" id="radio1" type="radio"
                                            checked><label for="radio1">Credit card</label></div>
                                    <div class="radio-item"><input name="radio" id="radio2" type="radio"><label
                                            for="radio2">Fawry</label></div>
                                </div>
                            </section>
                        </div>

                        <div class="content-check">
                            <div id="content1" style="display:block;">
                                <form action="{{ route('ConPaymentCourse.create') }}" method="post">
                                    @csrf
                                    <div class="group">
                                        <div class="required">
                                            <label for="name">Name on card:</label>
                                            <span>Required</span>
                                        </div>
                                        <input type="text" name="name" id="name" placeholder="Name on card">
                                    </div>
                                    <div class="group">
                                        <div class="required">
                                            <label for="name">Card Number</label>
                                            <span>Required</span>
                                        </div>
                                        <input type="text" name="number" id="card" placeholder="CVC">
                                    </div>

                                    <div class="collect">
                                        <div class="group">
                                            <div class="required">
                                                <label for="name">Expiry date:</label>
                                                <span>Required</span>
                                            </div>
                                            <input type="text" name="expiry" id="name" placeholder="MM/YY">
                                        </div>
                                        <div class="group">
                                            <div class="required">
                                                <label for="name">CVC</label>
                                                <span>Required</span>
                                            </div>
                                            <input type="text" name="CVC" id="card"
                                                placeholder="1234 5678 9012 3456">
                                        </div>
                                    </div>

                                    <div class="checkbox-wrapper-4">
                                        <input class="inp-cbx" id="morning" type="checkbox" />
                                        <label class="cbx" for="morning"><span>
                                                <svg width="12px" height="10px">
                                                    <use xlink:href="#check-4"></use>
                                                </svg></span><span>Securely save the card for my later
                                                purchase</span></label>
                                        <svg class="inline-svg">
                                            <symbol id="check-4" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </symbol>
                                        </svg>
                                    </div>


                            </div>

                            <div id="content2" style="display:none;">
                                <p class="summary-txt">
                                    Through Fawry, you can pay in cash at any of Fawry’s stores. Please pay within the
                                    specified time mentioned in the receipt so that your reservation is not automatically
                                    cancelled.
                                </p>
                                < action="#" method="post">
                                    <div class="group">
                                        <div class="required">
                                            <label for="name">Phone Number</label>
                                            <span>Required</span>
                                        </div>
                                        <input type="text" id="name" placeholder="01X-XXXX-XXXX">
                                    </div>

                            </div>
                        </div>

                        <div class="order-details">
                            <div class="avatar-details">
                                <div class="details">
                                    <div class="image"><img src="{{ asset('Assets/img/details.jpeg') }}" alt="">
                                    </div>
                                    <h5>{{ $course->title }}</h5>
                                </div>
                                <div class="discount">
                                    <span>{{ $course->price }} EGP</span>
                                    <span class="red">1500 EGP</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- summary -->
                    <div class="summary">
                        <h1>Summary</h1>
                        <div class="complete">
                            <div class="price-group">
                                <span>Original price:</span>
                                <span>1500 EGP</span>
                            </div>
                            <div class="price-group">
                                <span>Discounts:</span>
                                <span>-750 EGP</span>
                            </div>
                        </div>
                        <hr>
                        <div class="total">
                            <div class="price-group">
                                <span>Total:</span>
                                <span>750 EGP</span>
                            </div>
                        </div>
                        <p class="terms">
                            By completing your purchase you agree to these <a href="#" class="burble">Terms of
                                services</a>.
                        </p>
                        <button type="submit" class="complete-checkout">
                            <span>Complete checkout</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        </form>
                        <p class="dayes">
                            30-Day Money-Back Guarantee
                        </p>
                    </div>
                </section>
            </div>
        </div>
    @endsection

    @section('Js')
        <script>
            function myFunction() {
                var x = document.getElementById("navs");
                if (x.style.transform === "translateY(0%)") {
                    x.style.transform = "translateY(-100%)"; // Move the element off-screen vertically
                } else {
                    x.style.transform = "translateY(0%)"; // Bring the element back to its original position
                }
            }

            const radio1 = document.getElementById('radio1');
            const radio2 = document.getElementById('radio2');
            const content1 = document.getElementById('content1');
            const content2 = document.getElementById('content2');

            radio1.addEventListener('change', function() {
                if (this.checked) {
                    content1.style.display = 'block';
                    content2.style.display = 'none';
                }
            });

            radio2.addEventListener('change', function() {
                if (this.checked) {
                    content1.style.display = 'none';
                    content2.style.display = 'block';
                }
            });
        </script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('Assets/js/swiper-bundle.min.js') }}"></script>
    @endsection
