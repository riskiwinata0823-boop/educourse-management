<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    private $articles = [

        [
            'title' => 'Learning Laravel 10',
            'slug' => 'learning-laravel-10',
            'content' => 'Laravel 10 is a modern PHP framework used to build web applications easily.',
        ],

        [
            'title' => 'Introduction to Bootstrap 5',
            'slug' => 'introduction-bootstrap-5',
            'content' => 'Bootstrap 5 helps developers create responsive and modern UI quickly.',
        ],

        [
            'title' => 'Understanding MVC Concept',
            'slug' => 'understanding-mvc-concept',
            'content' => 'MVC stands for Model View Controller in web development.',
        ],

    ];

    public function index()
    {
        $articles = $this->articles;

        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = collect($this->articles)
            ->firstWhere('slug', $slug);

        if (!$article) {
            return response()->view('errors.404', [], 404);
        }

        $relatedArticles = collect($this->articles)
            ->where('slug', '!=', $slug);

        return view('articles.show', compact('article', 'relatedArticles'));
    }
}