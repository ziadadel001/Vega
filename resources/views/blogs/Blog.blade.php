@extends('layouts.vega')

@section('Title', 'Blogs')

@section('Files')

    <link rel="stylesheet" href="{{ asset('Assets/css/Blog.css') }}">

    <link rel="stylesheet" href="{{ asset('Assets/css/all.min.css') }}">


@endsection
@section('content')
    <main style="padding-top: 150px;">
        <div class="container">
            <!-- Main Data -->
            <div class="main-box" id="data-container">
                @foreach ($blogs as $blog)
                    <div class="card rounded-4">
                        <a href="{{ route('ShowOneBlog.create', $blog->id) }}" class="overflow-hidden">
                            <div class="card__img">
                                <img src="{{ asset('assets/img/Frame 680.png') }}" loading="lazy"
                                    class="card-img-top rounded-top-4" />
                            </div>
                        </a>
                        <div class="container">
                            <div class="card-body pt-4 pb-2">
                                <a href="{{ route('ShowOneBlog.create', $blog->id) }}"
                                    class="text-decoration-none text-dark">
                                    <h5 class="card-title pb-2 text">
                                        {{ $blog->title }}
                                    </h5>
                                </a>
                                <p class="card-text text-muted">
                                    {{ $blog->content }}
                                </p>
                                <div class="card-text pb-4 d-flex gap-2 align-center">
                                    <a href="{{ route('ShowMentor.create', $blog->mentor_id) }}">
                                        <img src="{{ asset('assets/img/Ellipse 196.png') }}" alt="" />
                                    </a>

                                    <div class="blog__writer">
                                        <a href="{{ route('ShowMentor.create', $blog->mentor_id) }}"
                                            class="text-decoration-none">
                                            <p class="fw-bold m-0">{{ $blog->mentor->name }}</p>
                                        </a>
                                        <p class="m-0">{{ $blog->PostedAgo }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </main>
@endsection
