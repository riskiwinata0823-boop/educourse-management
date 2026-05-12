<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [

            'name' => 'Riski Winata',
            'class' => 'TI 22',
            'skills' => [

                [
                    'name' => 'Laravel',
                    'percent' => 85,
                ],

                [
                    'name' => 'Bootstrap',
                    'percent' => 90,
                ],

                [
                    'name' => 'JavaScript',
                    'percent' => 75,
                ],

            ],

        ];

        return view('profile.index', compact('profile'));
    }
}