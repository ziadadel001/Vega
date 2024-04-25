@extends('layouts.vega')

@section('Title', 'mentors')
@section('Files')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/all.min.css') }}">
    <!-- CSS Main File -->
    <link rel="stylesheet" href="{{ asset('Assets/css/master.css') }}">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
@endsection


<!-- Start Search And Filter -->
@section('content')
    <main>
        <div class="container">


            <!-- Search -->
            <div>
                <form action="{{ route('SearchMentor.create') }}" method="POST" class="search-filter">
                    @csrf
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="search" class="" placeholder="search for any mentor" name="search_text">
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
            {{-- <div class="card__container swiper">
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
            </div> --}}

            <!-- Main Data -->



            <div class="main-box" id="data-container">
                @if (isset($mentors))
                    @foreach ($mentors as $mentor)
                        <div class="box card">
                            <a href="{{ route('ShowMentor.create', $mentor->id) }}">
                                <div class="image">
                                    <img src="{{ $mentor->photo }}" height="372px" weight="281px" alt="img">
                                </div>
                                <div class="data">
                                    <h3>{{ $mentor->name }}</h3>
                                    <p>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.3325 6.39839C18.5533 5.53673 17.2516 5.10589 15.3633 5.10589H15.1433V5.06923C15.1433 3.52923 15.1433 1.62256 11.6966 1.62256H10.3033C6.85662 1.62256 6.85662 3.53839 6.85662 5.06923V5.11506H6.63662C4.73912 5.11506 3.44662 5.54589 2.66745 6.40756C1.75995 7.41589 1.78745 8.77256 1.87912 9.69839L1.88829 9.76256L1.95741 10.4883C1.97167 10.6381 2.05247 10.7735 2.17841 10.8558C2.39977 11.0005 2.75492 11.2289 2.96995 11.3484C3.09829 11.4309 3.23579 11.5042 3.37329 11.5776C4.94079 12.4392 6.66412 13.0167 8.41495 13.3009C8.49745 14.1626 8.87329 15.1709 10.8808 15.1709C12.8883 15.1709 13.2825 14.1717 13.3466 13.2826C15.2166 12.9801 17.0225 12.3292 18.6541 11.3759C18.7091 11.3484 18.7458 11.3209 18.7916 11.2934C19.1501 11.0908 19.5218 10.8418 19.8617 10.5972C19.9748 10.5157 20.047 10.3896 20.0624 10.2511L20.075 10.1384L20.1208 9.70756C20.13 9.65256 20.13 9.60672 20.1391 9.54256C20.2125 8.61672 20.1941 7.35173 19.3325 6.39839ZM11.9991 12.6776C11.9991 13.6492 11.9991 13.7959 10.8716 13.7959C9.74412 13.7959 9.74412 13.6217 9.74412 12.6867V11.5317H11.9991V12.6776ZM8.16745 5.10589V5.06923C8.16745 3.51089 8.16745 2.93339 10.3033 2.93339H11.6966C13.8325 2.93339 13.8325 3.52006 13.8325 5.06923V5.11506H8.16745V5.10589Z"
                                                fill="#292D32" />
                                            <path
                                                d="M19.067 12.6211C19.4208 12.4532 19.8272 12.7341 19.7918 13.1241L19.4695 16.674C19.277 18.5073 18.5254 20.3773 14.492 20.3773H7.50703C3.4737 20.3773 2.72203 18.5073 2.52953 16.6832L2.22382 13.3203C2.18878 12.9349 2.58594 12.6544 2.93876 12.8136C3.99003 13.2878 5.84648 14.0911 7.01431 14.401C7.17848 14.4445 7.31139 14.5622 7.38444 14.7156C7.94507 15.8923 9.14792 16.5182 10.8804 16.5182C12.5957 16.5182 13.8135 15.8682 14.3761 14.6883C14.4493 14.5348 14.5822 14.4172 14.7465 14.3734C15.9874 14.0424 17.9661 13.1434 19.067 12.6211Z"
                                                fill="#292D32" />
                                        </svg>
                                        <span>{{ $mentor->job }}</span>
                                    </p>
                                    <p>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.1663 11.7886C20.1663 13.8877 19.0846 15.7486 17.4163 16.9219L16.188 19.6261C15.9038 20.2402 15.0788 20.3594 14.648 19.8369L13.2913 18.2052C11.5863 18.2052 10.0188 17.6277 8.82715 16.6652L9.37715 16.0144C13.6121 15.6936 16.958 12.3386 16.958 8.25022C16.958 7.55355 16.8571 6.86605 16.6738 6.20605C18.7546 7.30605 20.1663 9.39605 20.1663 11.7886Z"
                                                fill="#292D32" />
                                            <path
                                                d="M14.9413 5.56433C13.8688 3.36433 11.4763 1.8335 8.70801 1.8335C4.91301 1.8335 1.83301 4.70266 1.83301 8.25016C1.83301 10.3493 2.91467 12.2102 4.58301 13.3835L5.81134 16.0877C6.09551 16.7018 6.92051 16.8118 7.35134 16.2985L7.85551 15.6935L8.70801 14.6668C12.503 14.6668 15.583 11.7977 15.583 8.25016C15.583 7.28766 15.3538 6.38016 14.9413 5.56433ZM10.9997 8.93766H6.41634C6.04051 8.93766 5.72884 8.626 5.72884 8.25016C5.72884 7.87433 6.04051 7.56266 6.41634 7.56266H10.9997C11.3755 7.56266 11.6872 7.87433 11.6872 8.25016C11.6872 8.626 11.3755 8.93766 10.9997 8.93766Z"
                                                fill="#292D32" />
                                        </svg>
                                        <span>{{ $mentor->num_sessions }} sessions</span>
                                        <span class="review">({{ $mentor->reviews }} reviews)</span>
                                    </p>
                                    <div class="info">
                                        <div class="info-box ">
                                            <h3>Experience</h3>
                                            <p>{{ $mentor->experience }} Years</p>
                                        </div>
                                        <div class="info-box" style="border-right:none">
                                            <h3>Avg.attendance</h3>
                                            <p>{{ $mentor->attendance }}%</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    @foreach ($search as $mentor)
                        <div class="box card">
                            <a href="{{ route('ShowMentor.create', $mentor->id) }}">
                                <div class="image">
                                    <img src="{{ asset('assets/img/person.png') }}" alt="img">
                                </div>
                                <div class="data">
                                    <h3>{{ $mentor->name }}</h3>
                                    <p>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.3325 6.39839C18.5533 5.53673 17.2516 5.10589 15.3633 5.10589H15.1433V5.06923C15.1433 3.52923 15.1433 1.62256 11.6966 1.62256H10.3033C6.85662 1.62256 6.85662 3.53839 6.85662 5.06923V5.11506H6.63662C4.73912 5.11506 3.44662 5.54589 2.66745 6.40756C1.75995 7.41589 1.78745 8.77256 1.87912 9.69839L1.88829 9.76256L1.95741 10.4883C1.97167 10.6381 2.05247 10.7735 2.17841 10.8558C2.39977 11.0005 2.75492 11.2289 2.96995 11.3484C3.09829 11.4309 3.23579 11.5042 3.37329 11.5776C4.94079 12.4392 6.66412 13.0167 8.41495 13.3009C8.49745 14.1626 8.87329 15.1709 10.8808 15.1709C12.8883 15.1709 13.2825 14.1717 13.3466 13.2826C15.2166 12.9801 17.0225 12.3292 18.6541 11.3759C18.7091 11.3484 18.7458 11.3209 18.7916 11.2934C19.1501 11.0908 19.5218 10.8418 19.8617 10.5972C19.9748 10.5157 20.047 10.3896 20.0624 10.2511L20.075 10.1384L20.1208 9.70756C20.13 9.65256 20.13 9.60672 20.1391 9.54256C20.2125 8.61672 20.1941 7.35173 19.3325 6.39839ZM11.9991 12.6776C11.9991 13.6492 11.9991 13.7959 10.8716 13.7959C9.74412 13.7959 9.74412 13.6217 9.74412 12.6867V11.5317H11.9991V12.6776ZM8.16745 5.10589V5.06923C8.16745 3.51089 8.16745 2.93339 10.3033 2.93339H11.6966C13.8325 2.93339 13.8325 3.52006 13.8325 5.06923V5.11506H8.16745V5.10589Z"
                                                fill="#292D32" />
                                            <path
                                                d="M19.067 12.6211C19.4208 12.4532 19.8272 12.7341 19.7918 13.1241L19.4695 16.674C19.277 18.5073 18.5254 20.3773 14.492 20.3773H7.50703C3.4737 20.3773 2.72203 18.5073 2.52953 16.6832L2.22382 13.3203C2.18878 12.9349 2.58594 12.6544 2.93876 12.8136C3.99003 13.2878 5.84648 14.0911 7.01431 14.401C7.17848 14.4445 7.31139 14.5622 7.38444 14.7156C7.94507 15.8923 9.14792 16.5182 10.8804 16.5182C12.5957 16.5182 13.8135 15.8682 14.3761 14.6883C14.4493 14.5348 14.5822 14.4172 14.7465 14.3734C15.9874 14.0424 17.9661 13.1434 19.067 12.6211Z"
                                                fill="#292D32" />
                                        </svg>
                                        <span>{{ $mentor->job }}</span>
                                    </p>
                                    <p>
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.1663 11.7886C20.1663 13.8877 19.0846 15.7486 17.4163 16.9219L16.188 19.6261C15.9038 20.2402 15.0788 20.3594 14.648 19.8369L13.2913 18.2052C11.5863 18.2052 10.0188 17.6277 8.82715 16.6652L9.37715 16.0144C13.6121 15.6936 16.958 12.3386 16.958 8.25022C16.958 7.55355 16.8571 6.86605 16.6738 6.20605C18.7546 7.30605 20.1663 9.39605 20.1663 11.7886Z"
                                                fill="#292D32" />
                                            <path
                                                d="M14.9413 5.56433C13.8688 3.36433 11.4763 1.8335 8.70801 1.8335C4.91301 1.8335 1.83301 4.70266 1.83301 8.25016C1.83301 10.3493 2.91467 12.2102 4.58301 13.3835L5.81134 16.0877C6.09551 16.7018 6.92051 16.8118 7.35134 16.2985L7.85551 15.6935L8.70801 14.6668C12.503 14.6668 15.583 11.7977 15.583 8.25016C15.583 7.28766 15.3538 6.38016 14.9413 5.56433ZM10.9997 8.93766H6.41634C6.04051 8.93766 5.72884 8.626 5.72884 8.25016C5.72884 7.87433 6.04051 7.56266 6.41634 7.56266H10.9997C11.3755 7.56266 11.6872 7.87433 11.6872 8.25016C11.6872 8.626 11.3755 8.93766 10.9997 8.93766Z"
                                                fill="#292D32" />
                                        </svg>
                                        <span>{{ $mentor->num_sessions }} sessions</span>
                                        <span class="review">({{ $mentor->reviews }} reviews)</span>
                                    </p>
                                    <div class="info">
                                        <div class="info-box ">
                                            <h3>Experience</h3>
                                            <p>{{ $mentor->experience }} Years</p>
                                        </div>
                                        <div class="info-box" style="border-right:none">
                                            <h3>Avg.attendance</h3>
                                            <p>{{ $mentor->attendance }}%</p>
                                        </div>
                                    </div>
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

    <!--=============== MAIN JS ===============-->
@endsection
