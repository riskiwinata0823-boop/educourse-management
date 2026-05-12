@extends('layouts.app')

@section('content')

<nav class="breadcrumb mb-4">

    <a class="breadcrumb-item" href="/">
        Home
    </a>

    <a class="breadcrumb-item" href="/articles">
        Articles
    </a>

    <span class="breadcrumb-item active">
        {{ $article['title'] }}
    </span>

</nav>

<div class="card shadow">

    <div class="card-body">

        <h1>
            {{ $article['title'] }}
        </h1>

        <p class="mt-3">
            {{ $article['content'] }}
        </p>

    </div>

</div>

<div class="mt-5">

    <h4>Related Articles</h4>

    <ul class="list-group">

        @foreach($relatedArticles as $related)

        <li class="list-group-item">

            <a href="/articles/{{ $related['slug'] }}">

                {{ $related['title'] }}

            </a>

        </li>

        @endforeach

    </ul>

</div>

@endsection