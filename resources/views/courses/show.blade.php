@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-body">

        <h1 class="mb-3">
            {{ $course['course'] }}
        </h1>

        <ul class="list-group">

            <li class="list-group-item">
                <strong>SKS:</strong>
                {{ $course['sks'] }}
            </li>

            <li class="list-group-item">
                <strong>Semester:</strong>
                {{ $course['semester'] }}
            </li>

            <li class="list-group-item">
                <strong>Lecturer:</strong>
                {{ $course['lecturer'] }}
            </li>

            <li class="list-group-item">
                <strong>Type:</strong>
                {{ $course['type'] }}
            </li>

        </ul>

        <a href="/courses" class="btn btn-dark mt-3">
            Back
        </a>

    </div>

</div>

@endsection