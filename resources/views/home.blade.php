@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-light rounded-3 shadow">

    <div class="container-fluid py-5">

        <h1 class="display-5 fw-bold">
            EduCourse Management
        </h1>

        <p class="col-md-8 fs-4">

            Educational management system using Laravel 10 and Bootstrap 5.

        </p>

    </div>

</div>

<div id="carouselExample"
     class="carousel slide mb-5">

    <div class="carousel-inner">

        <div class="carousel-item active">

            <img src="https://via.placeholder.com/1200x400"
                 class="d-block w-100">

        </div>

        <div class="carousel-item">

            <img src="https://via.placeholder.com/1200x400"
                 class="d-block w-100">

        </div>

    </div>

    <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>

    <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>

<div class="row">

    <div class="col-md-4 mb-3">

        <div class="card shadow text-center">

            <div class="card-body">

                <h3>15</h3>

                <p>Students</p>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card shadow text-center">

            <div class="card-body">

                <h3>6</h3>

                <p>Lecturers</p>

            </div>

        </div>

    </div>

    <div class="col-md-4 mb-3">

        <div class="card shadow text-center">

            <div class="card-body">

                <h3>4</h3>

                <p>Courses</p>

            </div>

        </div>

    </div>

</div>

<x-alert>
    Welcome to EduCourse Laravel 10 Project
</x-alert>

@endsection