<?php

namespace App\Http\Controllers;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = [

            [
                'name' => 'Dr. Ahmad',
                'nidn' => '10001',
                'expertise' => 'Web Development',
            ],

            [
                'name' => 'Dr. Siti',
                'nidn' => '10002',
                'expertise' => 'Artificial Intelligence',
            ],

            [
                'name' => 'Dr. Budi',
                'nidn' => '10003',
                'expertise' => 'Database System',
            ],

            [
                'name' => 'Dr. Rina',
                'nidn' => '10004',
                'expertise' => 'Networking',
            ],

            [
                'name' => 'Dr. Dewi',
                'nidn' => '10005',
                'expertise' => 'Cyber Security',
            ],

            [
                'name' => 'Dr. Yoga',
                'nidn' => '10006',
                'expertise' => 'UI/UX Design',
            ],

        ];

        return view('lecturers.index', compact('lecturers'));
    }
}