@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">EduCourse Management</h1>
        <p class="col-md-8 fs-4">
            Sistem manajemen edukasi menggunakan Laravel 10 dan Bootstrap 5.
        </p>
    </div>
</div>

<div class="row">

    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h2>150</h2>
                <p>Students</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h2>20</h2>
                <p>Lecturers</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h2>35</h2>
                <p>Courses</p>
            </div>
        </div>
    </div>

</div>

<div class="accordion mt-5" id="accordionExample">

    <div class="accordion-item">

        <h2 class="accordion-header">

            <button class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne">

                About EduCourse

            </button>

        </h2>

        <div id="collapseOne"
             class="accordion-collapse collapse show">

            <div class="accordion-body">

                EduCourse is a Laravel 10 educational management system project.

            </div>

        </div>

    </div>

</div>
<div class="mt-4">

    <button class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal">

        Open Modal

    </button>

</div>

<div class="modal fade"
     id="exampleModal"
     tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    EduCourse Information
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                Welcome to EduCourse Management System.

            </div>

            <div class="modal-footer">

                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                    Close

                </button>

            </div>

        </div>

    </div>

</div>
<x-alert>
    Welcome to EduCourse Laravel 10 Project
</x-alert>

<x-card title="Laravel Framework">
    Laravel is a modern PHP framework for web development.
</x-card>

<x-card title="Bootstrap 5">
    Bootstrap helps create responsive and modern interfaces.
</x-card>

@endsection