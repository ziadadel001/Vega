@extends('layouts.vega')
@section('Title', 'courses')

@section('Files')


    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:ital,wght@0,300..700;1,300..700&display=swap"
        rel="preload">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <link rel="stylesheet" href="{{ asset('Assets/css/styles.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
@endsection


<!-- Start Header -->

<!-- End Header -->
@section('content')


    <!-- Start Search And Filter -->
    <main>
        <div class="container">

            <!-- Search -->
            <!-- Search -->
            <div>
                <form action="{{ route('SearchCourse.create') }}" method="POST" class="search-filter">
                    @csrf
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" class="" placeholder="search for any course" name="search_text">
                    </div>
                    <div class="filter">
                        <button class="filter-btn" type="submit">
                            <span class="txt-filter">Filter</span>
                            <span>
                                <svg width="24" height="15" viewBox="0 0 24 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.125 0.5H22.875C23.1734 0.5 23.4595 0.618526 23.6705 0.829505C23.8815 1.04048 24 1.32663 24 1.625C24 1.92337 23.8815 2.20952 23.6705 2.4205C23.4595 2.63147 23.1734 2.75 22.875 2.75H1.125C0.826631 2.75 0.540483 2.63147 0.329505 2.4205C0.118526 2.20952 0 1.92337 0 1.625C0 1.32663 0.118526 1.04048 0.329505 0.829505C0.540483 0.618526 0.826631 0.5 1.125 0.5ZM4.5 7.625C4.5 7.32663 4.61853 7.04048 4.8295 6.8295C5.04048 6.61853 5.32663 6.5 5.625 6.5H18.375C18.6734 6.5 18.9595 6.61853 19.1705 6.8295C19.3815 7.04048 19.5 7.32663 19.5 7.625C19.5 7.92337 19.3815 8.20952 19.1705 8.42049C18.9595 8.63147 18.6734 8.75 18.375 8.75H5.625C5.32663 8.75 5.04048 8.63147 4.8295 8.42049C4.61853 8.20952 4.5 7.92337 4.5 7.625ZM9 13.625C9 13.3266 9.11853 13.0405 9.3295 12.8295C9.54048 12.6185 9.82663 12.5 10.125 12.5H13.875C14.1734 12.5 14.4595 12.6185 14.6705 12.8295C14.8815 13.0405 15 13.3266 15 13.625C15 13.9234 14.8815 14.2095 14.6705 14.4205C14.4595 14.6315 14.1734 14.75 13.875 14.75H10.125C9.82663 14.75 9.54048 14.6315 9.3295 14.4205C9.11853 14.2095 9 13.9234 9 13.625Z"
                                        fill="#002333" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Slider -->
            <div class="card__container swiper">
                <div class="card__content">
                    <div class="swiper-wrapper">

                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-border-all"></i>
                                </span>
                                <span class="data">All</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide active">
                                <span class="icon">
                                    <i class="fa-solid fa-computer"></i>
                                </span>
                                <span class="data">Web development</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-gamepad"></i>
                                </span>
                                <span class="data">Game development</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-database"></i>
                                </span>
                                <span class="data">Data science</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-brain"></i>
                                </span>
                                <span class="data">AI and MI</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </span>
                                <span class="data">Cyber security</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-pen-nib"></i>
                                </span>
                                <span class="data">Design</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-cloud"></i>
                                </span>
                                <span class="data">Cloud computing</span>
                            </div>
                        </div>
                        <div class="card__article swiper-slide">
                            <div class="slide">
                                <span class="icon">
                                    <i class="fa-solid fa-code"></i>
                                </span>
                                <span class="data">DevsOps</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    <i class="ri-arrow-right-s-line"></i>
                </div>

                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-s-line"></i>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- Main Data -->
            <div class="main-box" id="data-container">
                @if (isset($courses))
                    @foreach ($courses as $course)
                        <div class="box card course">
                            <a href={{ route('ShowCourse.create', $course->id) }}>
                                <div class="image">
                                    <img src="{{ asset('Assets/img/course.png') }}" alt="img">
                                </div>
                                <div class="data">
                                    <h3>{{ $course->title }}</h3>
                                    <div class="by"><span>By</span>
                                        <h5>{{ $course->mentor->name }}</h5>
                                    </div>
                                    <p class="info-p">
                                        {{ $course->description }}
                                    </p>
                                    <div class="info-bottom">
                                        <div class="per">
                                            <span class="icon-per"><i class="fa-solid fa-user"></i></span>
                                            <span class="num-per">{{ $course->students }}</span>
                                        </div>
                                        <div class="rate">
                                            <span class="icon-rate"><i class="fa-solid fa-star"
                                                    style="color: orange;"></i></span>
                                            <span class="num-rate">{{ $course->rate }} (90 students)</span>
                                        </div>
                                    </div>
                                    <button>
                                        <i class="fa-solid fa-cart-shopping" style="color: white;"></i>
                                        <span class="text-light">Buy {{ $course->price }} EGP</span>
                                    </button>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    @foreach ($search as $course)
                        <div class="box card course">
                            <a href={{ route('ShowCourse.create', $course->id) }}>
                                <div class="image">
                                    <img src="{{ asset('Assets/img/course.png') }}" alt="img">
                                </div>
                                <div class="data">
                                    <h3>{{ $course->title }}</h3>
                                    <div class="by"><span>By</span>
                                        <h5>{{ $course->mentor->name }}</h5>
                                    </div>
                                    <p class="info-p">
                                        {{ $course->description }}
                                    </p>
                                    <div class="info-bottom">
                                        <div class="per">
                                            <span class="icon-per"><i class="fa-solid fa-user"></i></span>
                                            <span class="num-per">{{ $course->students }}</span>
                                        </div>
                                        <div class="rate">
                                            <span class="icon-rate"><i class="fa-solid fa-star"
                                                    style="color: orange;"></i></span>
                                            <span class="num-rate">{{ $course->rate }} (90 students)</span>
                                        </div>
                                    </div>
                                    <button>
                                        <i class="fa-solid fa-cart-shopping" style="color: white;"></i>
                                        <span class="text-light">Buy {{ $course->price }} EGP</span>
                                    </button>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="pagination" id="pagination">
                <a href="#" id="prev"><i class="fa-solid fa-arrow-left"></i></a>
                <a href="#" class="page-link" data-page="1">1</a>
                <a href="#" class="page-link" data-page="2">2</a>
                <a href="#" class="page-link" data-page="3">3</a>
                <a href="#" id="next"><i class="fa-solid fa-arrow-right"></i></a>

            </div>

        </div>
    </main>
@endsection

<!-- End Search And Filter -->
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

        const cardsPerPage = 12; // Number of cards to show per page 
        const dataContainer = document.getElementById('data-container');
        const pagination = document.getElementById('pagination');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        const pageNumbers = document.getElementById('page-numbers');
        const pageLinks = document.querySelectorAll('.page-link');

        const cards =
            Array.from(dataContainer.getElementsByClassName('card'));

        // Calculate the total number of pages 
        const totalPages = Math.ceil(cards.length / cardsPerPage);
        let currentPage = 1;

        // Function to display cards for a specific page 
        function displayPage(page) {
            const startIndex = (page - 1) * cardsPerPage;
            const endIndex = startIndex + cardsPerPage;
            cards.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
        // function displayPage(page) {
        //     var count = 0
        //     const startIndex = (page - 1) * cardsPerPage;
        //     const endIndex = startIndex + cardsPerPage;
        //     cards.forEach((card, index) => {
        //         if (index >= startIndex && index < endIndex) {
        //             card.style.display = 'block';
        //         } else {
        //             card.style.display = 'none';
        //             count += 1
        //             console.log(count)
        //             console.log(card)
        //             if (count == card.style.display == 'block'.length) {
        //                 dataContainer.innerHTML = "<p class='empty'>No boxes to display</p>";
        //             }
        //         }
        //     });
        // }

        // Function to update pagination buttons and page numbers 
        function updatePagination() {
            pageNumbers.textContent =
                `Page ${currentPage} of ${totalPages}`;
            prevButton.disabled = currentPage === 1;
            nextButton.disabled = currentPage === totalPages;
            pageLinks.forEach((link) => {
                const page = parseInt(link.getAttribute('data-page'));
                link.classList.toggle('active', page === currentPage);
            });
        }

        // Event listener for "Previous" button 
        prevButton.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                displayPage(currentPage);
                updatePagination();
            }
        });

        // Event listener for "Next" button 
        nextButton.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                displayPage(currentPage);
                updatePagination();
            }
        });

        // Event listener for page number buttons 
        pageLinks.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = parseInt(link.getAttribute('data-page'));
                if (page !== currentPage) {
                    currentPage = page;
                    displayPage(currentPage);
                    updatePagination();
                }
            });
        });


        // Initial page load 
        displayPage(currentPage);
        updatePagination();
    </script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('Assets/js/swiper-bundle.min.js') }}"></script>
    <script>
        // //////////////////////
        /*=============== SWIPER JS ===============*/
        let swiperCards = new Swiper(".card__content", {
            loop: true,
            spaceBetween: 32,
            grabCursor: true,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                567: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 5,
                },
                992: {
                    slidesPerView: 7,
                },
            },
        });
    </script>

    <!--=============== MAIN JS ===============-->
@endsection
