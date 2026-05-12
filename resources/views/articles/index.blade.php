@php
use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('content')

<h1 class="mb-4">Articles</h1>

<div class="row">

@foreach($articles as $article)

<div class="col-md-4 mb-4">

    <div class="card shadow h-100">

        <div class="card-body">

            <h5>
                {{ $article['title'] }}
            </h5>

            <p>
                {{ Str::limit($article['content'], 80) }}
            </p>

            <a href="/articles/{{ $article['slug'] }}"
               class="btn btn-primary">

                Read More

            </a>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection