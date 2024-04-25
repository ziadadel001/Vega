@extends('layouts.vega')

@section('Files')
    <link rel="stylesheet" href="{{ asset('assets/css/Blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/fontawesome-free-6.4.2-web/css/all.min.css') }}">
@endsection

@section('content')
    <div class="  blogs">
        <div class="blog1">
            <p class="text1">Feature Selection Techniques in Machine Learning</p>
            <div class="d-flex align-items-center py-4 gap-3">
                <img src="{{ asset('assets/img/Ellipse 196.png') }}" alt="" width="42px" height="42px">
                <div class="user">
                    <p class="m-0 text6">{{ $blog->mentor->name }}</p>
                    <p class="m-0 text7">23 sep,2023 . 5 min read</p>
                </div>
            </div>
            <p class="text2">We’ll talk about supervised and unsupervised feature selection techniques. Learn how to use
                them
                to avoid the biggest scare in ML: overfitting and underfitting.</p>
            <img src="{{ asset('assets/img/Frame 3978 (1).png') }}" alt="">
            <p class="text2">If you’re working with a dataset and trying to build a machine learning model, you probably
                don’t
                need all the
                data and columns that feed into your model. Using unnecessary data can confuse the model and lead to
                undesirable
                results like overfitting or underfitting.</p>
            <p class="text2">So, how do you choose the right columns and data that will have the most impact on your model?
                We’ll answer exactly that question in this article.</p>
            <p class="text2">Choosing the right feature selection method is like choosing the right weapon in a video game.
                It
                completely depends on your data and the goal of the project itself.</p>
            <p class="text2">The two main categories of feature selection are supervised and unsupervised machine learning
                techniques. Here’s the overview.</p>
            <img src="{{ asset('assets/img/image 17.png') }}" alt="">
            <p class="text2">Let’s kick off with supervised learning.</p>
            <p class="text3">Filter-Based Feature Selection Techniques in Machine Learning</p>
            <p class="text2">Filter-based approaches assess the value of each feature without considering the performance
                of a
                specific machine learning algorithm. You’re evaluating just the data itself to understand how the data
                correlates with each other. Within filter-based approaches, there are four feature selection techniques.</p>
            <p class="text3 pt-5">Conclusion</p>
            <p class="text2">In conclusion, feature selection is a vital process in machine learning that involves
                identifying
                the most impactful data for model accuracy.</p>
            <p class="text2">In conclusion, feature selection is a vital process in machine learning that involves
                identifying
                the most impactful data for model accuracy.</p>
            <p class="text2">All these techniques can help avoid overfitting and underfitting, two of the most significant
                challenges in machine learning.</p>
            <p class="text2">Now, it’s up to you and your project which feature selection techniques you’ll use.</p>
            <div>
                <button class=" btn1">Machine Learing</button>
                <button class="btn1" style="margin-left: 20px;">AI</button>
            </div>
            <div class="d-flex justify-content-between pt-5">
                <div class="d-flex gap-5">
                    <div class="d-flex align-items-center gap-2">
                        <button id="heartButton" style="border: none; background-color: white;">
                            <i id="heartIcon" class="far fa-heart"></i>
                        </button>

                        <p class="m-0">250</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <button style="border: none; background-color: white;">
                            <i class="far fa-comment"></i>
                        </button>
                        <p class="m-0">250</p>
                    </div>
                </div>
                <div>
                    <button style="border: none; background-color: white; margin-right: 20px;"><i
                            class="fa-solid fa-bookmark"></i></button>
                    <button style="border: none; background-color: white;"><i class="fa-solid fa-share"></i></button>
                </div>
            </div>
            <hr style="border: 1px solid black;">
            <p class="text3">Recommended from Vega</p>
            <div class="main-box" id="data-container">

                <div class="card rounded-4">
                    <a href="#" class="overflow-hidden">
                        <div class="card__img">
                            <img src="{{ asset('assets/img/Frame 680.png') }}" loading="lazy"
                                class="card-img-top rounded-top-4" />
                        </div>
                    </a>
                    <div class="container">
                        <div class="card-body pt-4 pb-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="card-title pb-2 text">
                                    Feature Selection Techniques in Machine Learning
                                </h5>
                            </a>
                            <p class="card-text text-muted">
                                We’ll talk about supervised and un-supervised feature
                                selection techniques. Learn how to use them and .......
                            </p>
                            <div class="card-text pb-4 d-flex gap-2 align-center">
                                <a href="#">
                                    <img src="{{ asset('assets/img/Ellipse 196.png') }}" alt="" />
                                </a>

                                <div class="blog__writer">
                                    <a href="#" class="text-decoration-none">
                                        <p class="fw-bold m-0">Ahmed Gamal</p>
                                    </a>
                                    <p class="m-0">23 sep,2023 . 5 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-4">
                    <a href="#" class="overflow-hidden">
                        <div class="card__img">
                            <img src="{{ asset('assets/img/Frame 680.png') }}" loading="lazy"
                                class="card-img-top rounded-top-4" />
                        </div>
                    </a>
                    <div class="container">
                        <div class="card-body pt-4 pb-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="card-title pb-2 text">
                                    Feature Selection Techniques in Machine Learning
                                </h5>
                            </a>
                            <p class="card-text text-muted">
                                We’ll talk about supervised and un-supervised feature
                                selection techniques. Learn how to use them and .......
                            </p>
                            <div class="card-text pb-4 d-flex gap-2 align-center">
                                <a href="#">
                                    <img src="{{ asset('assets/img/Ellipse 196.png') }}" alt="" />
                                </a>

                                <div class="blog__writer">
                                    <a href="#" class="text-decoration-none">
                                        <p class="fw-bold m-0">Ahmed Gamal</p>
                                    </a>
                                    <p class="m-0">23 sep,2023 . 5 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-4">
                    <a href="#" class="overflow-hidden">
                        <div class="card__img">
                            <img src="{{ asset('assets/img/Frame 680.png') }}" loading="lazy"
                                class="card-img-top rounded-top-4" />
                        </div>
                    </a>
                    <div class="container">
                        <div class="card-body pt-4 pb-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="card-title pb-2 text">
                                    Feature Selection Techniques in Machine Learning
                                </h5>
                            </a>
                            <p class="card-text text-muted">
                                We’ll talk about supervised and un-supervised feature
                                selection techniques. Learn how to use them and .......
                            </p>
                            <div class="card-text pb-4 d-flex gap-2 align-center">
                                <a href="#">
                                    <img src="{{ asset('assets/img/Ellipse 196.png') }}" alt="" />
                                </a>

                                <div class="blog__writer">
                                    <a href="#" class="text-decoration-none">
                                        <p class="fw-bold m-0">Ahmed Gamal</p>
                                    </a>
                                    <p class="m-0">23 sep,2023 . 5 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-4">
                    <a href="#" class="overflow-hidden">
                        <div class="card__img">
                            <img src="{{ asset('assets/img/Frame 680.png') }}" loading="lazy"
                                class="card-img-top rounded-top-4" />
                        </div>
                    </a>
                    <div class="container">
                        <div class="card-body pt-4 pb-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <h5 class="card-title pb-2 text">
                                    Feature Selection Techniques in Machine Learning
                                </h5>
                            </a>
                            <p class="card-text text-muted">
                                We’ll talk about supervised and un-supervised feature
                                selection techniques. Learn how to use them and .......
                            </p>
                            <div class="card-text pb-4 d-flex gap-2 align-center">
                                <a href="#">
                                    <img src="{{ asset('assets/img/Ellipse 196.png') }}" alt="" />
                                </a>

                                <div class="blog__writer">
                                    <a href="#" class="text-decoration-none">
                                        <p class="fw-bold m-0">Ahmed Gamal</p>
                                    </a>
                                    <p class="m-0">23 sep,2023 . 5 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
