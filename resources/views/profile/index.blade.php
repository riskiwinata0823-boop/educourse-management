@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow">

            <div class="card-body text-center">

                <img src="https://via.placeholder.com/150"
                     class="rounded-circle mb-3">

                <h2>
                    {{ $profile['name'] }}
                </h2>

                <p class="text-muted">
                    {{ $profile['class'] }}
                </p>

                <hr>

                <h4 class="mb-4">
                    Skills
                </h4>

                @foreach($profile['skills'] as $skill)

                <div class="mb-3 text-start">

                    <label>
                        {{ $skill['name'] }}
                    </label>

                    <div class="progress">

                        <div class="progress-bar"
                             role="progressbar"
                             style="width: {{ $skill['percent'] }}%">

                            {{ $skill['percent'] }}%

                        </div>

                    </div>

                </div>

                @endforeach

                <hr>

                <h4>
                    Social Media
                </h4>

                <div class="d-flex justify-content-center gap-3 mt-3">

                    <a href="#" class="btn btn-primary">
                        Instagram
                    </a>

                    <a href="#" class="btn btn-dark">
                        GitHub
                    </a>

                    <a href="#" class="btn btn-info">
                        LinkedIn
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection