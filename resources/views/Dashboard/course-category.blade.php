@extends('layouts.Dashboard')
@section('Files')
    <link rel="stylesheet" href="{{ asset('Assets/Dashboard/css/course-category.css') }}" />
@endsection
@section('Content')
    <section class="header">
        <div class="Categories">
            <h1>Course category</h1>
            <p>You have total 4 Categories</p>
        </div>
        <div class="filter">
            <select name="filtered-by" id="filtered-by">
                <option value="Filtered-By" selected disabled hidden>Filtered By</option>
                <option value="Discount-low to high">Discount-low to high</option>
                <option value="Discount-high to low">Discount-high to low</option>
                <option value="Price-low to high">Price-low to high</option>
                <option value="Price-high to low">Price-high to low</option>
            </select>
            <button><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Add Category</button>
        </div>
    </section>
    <section class="course-category">
        @foreach ($categorys as $category)
            <div class="web-devolopment">
                <div class="SubCategories">
                    <img src="{{ asset('Assets/Dashboard/images/wd.png') }}">
                    <span>
                        <h2>
                            category
                        </h2>
                        <p>
                            value SubCategories
                        </p>
                    </span>
                </div>
                <p>Devolop the website with web application</p>
                <a href="#" class="a1">Responsive Design</a>
                <a href="#" class="a2">Wordpress Cutomization</a> <br>
                <a href="#" class="a3">Theme Development</a>
                <a href="#" class="a4">Bootstrap</a>
                <a href="#" class="a5">Html & Css grid</a>
            </div>
        @endforeach
    </section>
@endsection
