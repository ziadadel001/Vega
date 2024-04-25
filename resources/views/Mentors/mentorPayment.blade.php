@extends('layouts.vega')

@section('Title')
    Payment
@endsection

@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/css/mentorPayment.css') }}" />
@endsection

@section('content')
    <div class="d-lg-flex mt-5 container gap-4">
        <div class="checkout w-100">
            <div class="container">
                <h1 class="mb-4">Checkout</h1>

                <h3 class="fw-normal mb-4">Payment</h3>
                <h5 class="mb-3">Choose your payment Method</h5>
                <div class="method-tabs d-flex gap-4">
                    <div class="tab active d-flex align-items-center justify-content-between w-100">
                        <p class="m-0">Credit card</p>
                        <div class="radioBtn" data-tab="1">
                            <div class="innerRadio radioActive"></div>
                        </div>
                    </div>
                    <div class="tab d-flex align-items-center justify-content-between w-100">
                        <p class="m-0">Fawry</p>
                        <div class="radioBtn" data-tab="2">
                            <div class="innerRadio"></div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('Payment.create', $mentor->id) }}" class="payment-form mt-3 d-flex flex-column gap-3"
                    id="form-1" method="Post">
                    @csrf
                    {{-- ! ziad nader --}}
                    <input type="hidden" type="text" />

                    <div class="d-flex flex-column gap-2">
                        <label for="name" class="d-block">Name on card</label>
                        <input name="cardname" type="text" id="card-name" placeholder="Name on card" class="w-100 p-2"
                            required />
                        <p class="m-0 text-danger hidden">please insert the Card name</p>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <label for="num" class="d-block">Card number</label>
                        <input name="cardnumber" type="text" id="card-num" placeholder="Card number"
                            class="w-100 p-2" />
                        <p class="m-0 text-danger hidden">
                            please insert the Card number
                        </p>
                    </div>

                    <div class="d-lg-flex gap-3">
                        <div class="d-flex flex-column gap-2 w-100">
                            <label for="expire" class="d-block">Expiry date</label>
                            <input name="expiredate" type="text" id="expire" placeholder="MM/YY" class="w-100 p-2" />
                            <p class="m-0 text-danger hidden">
                                please insert the expiry date
                            </p>
                        </div>
                        <div class="d-flex flex-column gap-2 w-100">
                            <label for="CVC" class="d-block">CVC/CVV</label>
                            <input name="CVC" type="text" id="CVC" placeholder="CVC" class="w-100 p-2" />
                            <p class="m-0 text-danger hidden">please insert CVC/CVV</p>
                        </div>
                    </div>

                </form>
                <form action="{{ route('Payment.create', $mentor->id) }}" method="post" class="payment-form mt-3 hidden"
                    id="form-2">
                    @csrf
                    <p>
                        Through Fawry, you can pay in cash at any of Fawry’s stores.
                        Please pay within the specified time mentioned in the receipt so
                        that your reservation is not automatically cancelled.
                    </p>
                    <div class="d-flex flex-column gap-2">
                        <label for="num" class="d-block">Phone number</label>
                        <input type="text" id="fawry" name="phoneNumber" placeholder="01X-XXXX-XXXX"
                            class="w-100 p-2" />
                        <p class="m-0 text-danger hidden">
                            please insert your phone number
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="session-details w-100 mt-5">
            <div class="container session__details--container">
                <!-- <h5 class="">Session Details</h5>
                                                                          <h2>200 EGP</h2>
                                                                          <p class="m-0 text-muted">Mentor:</p>
                                                                          <div class="session-mentordata">
                                                                            <img
                                                                              src="assets/images/heroPerson1.jpg"
                                                                              class="float-start me-2 mt-1"
                                                                              alt="..."
                                                                            />
                                                                            <div class="d-flex flex-column gap-1">
                                                                              <h6 class="m-0">Mariam Gamal</h6>
                                                                              <p class="m-0 text-muted">Ux Leader & Career Coach at Ex-Adobe</p>
                                                                            </div>
                                                                          </div> -->

                <!-- <div class="mt-4">
                                                                            <img
                                                                              src="assets/images/MentorInfoPage/tag.png"
                                                                              class="float-start me-2 mt-1"
                                                                              alt="..."
                                                                            />
                                                                            <div class="d-flex flex-column gap-1">
                                                                              <h6 class="m-0">Portfolio Review</h6>
                                                                              <p class="m-0 text-muted">Topic</p>
                                                                            </div>
                                                                          </div>
                                                                          <div class="mt-2">
                                                                            <img
                                                                              src="assets/images/MentorInfoPage/clockIcon.png"
                                                                              class="float-start me-2 mt-1"
                                                                              alt="..."
                                                                            />
                                                                            <div class="d-flex flex-column gap-1">
                                                                              <h6 class="m-0">5:00</h6>
                                                                              <p class="m-0 text-muted">Time</p>
                                                                            </div>
                                                                          </div>
                                                                          <div class="mt-2">
                                                                            <img
                                                                              src="assets/images/MentorInfoPage/timer.png"
                                                                              class="float-start me-2 mt-1"
                                                                              alt="..."
                                                                            />
                                                                            <div class="d-flex flex-column gap-1">
                                                                              <h6 class="m-0">30 minutes</h6>
                                                                              <p class="m-0 text-muted">Duration</p>
                                                                            </div>
                                                                          </div>
                                                                          <div class="mt-2">
                                                                            <img
                                                                              src="assets/images/MentorInfoPage/calendar.png"
                                                                              class="float-start me-2 mt-1"
                                                                              alt="..."
                                                                            />
                                                                            <div class="d-flex flex-column gap-1">
                                                                              <h6 class="m-0">5 March</h6>
                                                                              <p class="m-0 text-muted">Date</p>
                                                                            </div>
                                                                          </div> -->
                <!-- </div> -->
                <button class="btn mt-3 submitBtn" type="submit">
                    Complete Checkout
                </button>
            </div>
        </div>
    </div>
    <div class="popup px-5 py-4 text-center hidden">
        <img src="{{ asset('assets/images/booking-confirmation.svg') }}" alt="booked_Successfully" />
        <h4>Booked Successfully</h4>
        <small class="text-muted mb-3">Zoom link will be sent 10 Minutes before the session via Email.
        </small>
        <button class="btn-prim ok d-block m-auto mt-3">OK</button>
    </div>
    <div class="overlay hidden"></div>
@endsection

@section('Js')
    <script>
        const radio = document.querySelectorAll(".radioBtn");
        const form = document.querySelectorAll(".payment-form");

        radio.forEach((el) =>
            el.addEventListener("click", function(e) {
                const clicked = e.target.closest(".radioBtn");
                if (!clicked) return;
                document
                    .querySelectorAll(".innerRadio")
                    .forEach((el) => el.classList.remove("radioActive"));
                document
                    .querySelectorAll(".tab")
                    .forEach((el) => el.classList.remove("active"));

                form.forEach((el) => el.classList.add("hidden"));

                // handling tabs
                clicked.querySelector(".innerRadio").classList.add("radioActive");
                clicked.closest(".tab").classList.add("active");

                // handling content
                document
                    .querySelector(`#form-${clicked.dataset.tab}`)
                    .classList.remove("hidden");
                formSubmition(document.querySelector(`#form-${clicked.dataset.tab}`));
            })
        );

        // payment form validation
        const submitBtn = document.querySelector(".submitBtn");
        const popup = document.querySelector(".popup");
        const overlay = document.querySelector(".overlay");
        const okBtn = document.querySelector(".ok");
        okBtn.addEventListener("click", function() {
            popup.classList.add("hidden");
            overlay.classList.add("hidden");
        });
        ////
        function formSubmition(form) {
            submitBtn.addEventListener("click", function(e) {
                const cardName = form.querySelector("#card-name");
                const cardNum = form.querySelector("#card-num");
                const expire = form.querySelector("#expire");
                const cvc = form.querySelector("#CVC");
                const phoneNum = form.querySelector("#fawry");

                if (
                    cardName?.value == "" ||
                    cardNum?.value == "" ||
                    expire?.value == "" ||
                    cvc?.value == "" ||
                    phoneNum?.value == ""
                ) {
                    form.querySelectorAll("input").forEach((el) => {
                        if (el.value == "") {
                            el.style.borderColor = "red";
                            el.nextElementSibling.classList.remove("hidden");
                        } else {
                            el.style.borderColor = "";
                            el.nextElementSibling.classList.add("hidden");
                        }
                    });

                    e.preventDefault();
                    return false;
                } else {
                    form.submit();
                }
            });
        }
        formSubmition(document.querySelector("#form-1"));

        ////

        // display session details in payment confirmation
        const sessionDetailsContainer = document.querySelector(
            ".session__details--container"
        );
        const dateTime = localStorage.getItem("dateAndTime").split(",");
        const renderSessionDetails = function() {
            const html = `
            <h5 class="">Session Details</h5>
            <h2>200 EGP</h2>
            <p class="m-0 text-muted">Mentor:</p>
            <div class="session-mentordata">
                <img
                src= {{ asset('assets/images/heroPerson1.jpg') }}
                class="float-start me-2 mt-1"
                alt="ssssss"
                />
                <div class="d-flex flex-column gap-1">
                <h6 class="m-0">{{ $mentor->name }}</h6>
                <p class="m-0 text-muted">{{ $mentor->job }}</p>
                </div>
            </div>
            <div class="mt-4">
                    <img
                      src={{ asset('assets/images/MentorInfoPage/tag.png') }} 
                     class="float-start me-2 mt-1"
                      alt="..."
                    />
                    <div class="d-flex flex-column gap-1">
                      <h6 class="m-0">Portfolio Review</h6>
                      <p class="m-0 text-muted">Topic</p>
                    </div>
                  </div>
                  <div class="mt-2">
                    <img
                      src={{ asset('assets/images/MentorInfoPage/clockIcon.png') }}
                      class="float-start me-2 mt-1"
                      alt="..."
                    />
                    <div class="d-flex flex-column gap-1">
                      <h6 class="m-0">${dateTime[1]}</h6>
                      <p class="m-0 text-muted">Time</p>
                    </div>
                  </div>
                  <div class="mt-2">
                    <img
                      src={{ asset('assets/images/MentorInfoPage/timer.png') }}
                      class="float-start me-2 mt-1"
                      alt="..."
                    />
                    <div class="d-flex flex-column gap-1">
                      <h6 class="m-0">30 minutes</h6>
                      <p class="m-0 text-muted">Duration</p>
                    </div>
                  </div>
                  <div class="mt-2">
                    <img
                      src={{ asset('assets/images/MentorInfoPage/calendar.png') }}
                      class="float-start me-2 mt-1"
                      alt="..."
                    />
                    <div class="d-flex flex-column gap-1">
                      <h6 class="m-0">${dateTime[0].split(" ")[2]} ${
            dateTime[0].split(" ")[1]
          }</h6>
                      <p class="m-0 text-muted">Date</p>
                    </div>
                  </div>`;
            sessionDetailsContainer.insertAdjacentHTML("afterbegin", html);
        };
        renderSessionDetails();
    </script>
@endsection
