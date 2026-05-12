@extends('layouts.app')

@section('content')

<h1 class="mb-4">Lecturers Data</h1>

<div class="row">

@foreach($lecturers as $lecturer)

<div class="col-md-4 mb-4">

    <div class="card shadow">

        <img src="https://via.placeholder.com/300x200"
             class="card-img-top">

        <div class="card-body">

            <h5 class="card-title">
                {{ $lecturer['name'] }}
            </h5>

            <p>
                <strong>NIDN:</strong>
                {{ $lecturer['nidn'] }}
            </p>

            <p>
                <strong>Expertise:</strong>
                {{ $lecturer['expertise'] }}
            </p>

            <button class="btn btn-primary">
                Detail
            </button>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection