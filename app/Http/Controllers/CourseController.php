<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    private $courses = [

        [
            'id' => 1,
            'course' => 'Web Programming',
            'sks' => 3,
            'semester' => 4,
            'lecturer' => 'Dr. Ahmad',
            'type' => 'Wajib',
        ],

        [
            'id' => 2,
            'course' => 'Artificial Intelligence',
            'sks' => 3,
            'semester' => 6,
            'lecturer' => 'Dr. Siti',
            'type' => 'Pilihan',
        ],

        [
            'id' => 3,
            'course' => 'Database Systems',
            'sks' => 2,
            'semester' => 3,
            'lecturer' => 'Dr. Budi',
            'type' => 'Wajib',
        ],

        [
            'id' => 4,
            'course' => 'Computer Networks',
            'sks' => 2,
            'semester' => 5,
            'lecturer' => 'Dr. Rina',
            'type' => 'Pilihan',
        ],

    ];

    public function index()
    {
        $courses = $this->courses;

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = collect($this->courses)->firstWhere('id', $id);

        if (!$course) {
            return response()->view('errors.404', [], 404);
        }

        return view('courses.show', compact('course'));
    }
}