<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index($name = null)
    {
        $students = [

            ['name' => 'Budi', 'nim' => '220001', 'major' => 'Informatika', 'year' => '2022', 'status' => 'Aktif'],
            ['name' => 'Siti', 'nim' => '220002', 'major' => 'Sistem Informasi', 'year' => '2022', 'status' => 'Nonaktif'],
            ['name' => 'Andi', 'nim' => '220003', 'major' => 'Teknik Komputer', 'year' => '2021', 'status' => 'Aktif'],
            ['name' => 'Rina', 'nim' => '220004', 'major' => 'Informatika', 'year' => '2023', 'status' => 'Aktif'],
            ['name' => 'Dewi', 'nim' => '220005', 'major' => 'Sistem Informasi', 'year' => '2021', 'status' => 'Nonaktif'],
            ['name' => 'Rizki', 'nim' => '220006', 'major' => 'Teknik Komputer', 'year' => '2020', 'status' => 'Aktif'],
            ['name' => 'Asep', 'nim' => '220007', 'major' => 'Informatika', 'year' => '2022', 'status' => 'Aktif'],
            ['name' => 'Rahma', 'nim' => '220008', 'major' => 'Sistem Informasi', 'year' => '2020', 'status' => 'Nonaktif'],
            ['name' => 'Putri', 'nim' => '220009', 'major' => 'Informatika', 'year' => '2021', 'status' => 'Aktif'],
            ['name' => 'Dimas', 'nim' => '220010', 'major' => 'Teknik Komputer', 'year' => '2022', 'status' => 'Aktif'],
            ['name' => 'Yoga', 'nim' => '220011', 'major' => 'Informatika', 'year' => '2020', 'status' => 'Aktif'],
            ['name' => 'Lina', 'nim' => '220012', 'major' => 'Sistem Informasi', 'year' => '2023', 'status' => 'Aktif'],
            ['name' => 'Fajar', 'nim' => '220013', 'major' => 'Teknik Komputer', 'year' => '2021', 'status' => 'Nonaktif'],
            ['name' => 'Nisa', 'nim' => '220014', 'major' => 'Informatika', 'year' => '2022', 'status' => 'Aktif'],
            ['name' => 'Aulia', 'nim' => '220015', 'major' => 'Sistem Informasi', 'year' => '2020', 'status' => 'Aktif'],

        ];

        return view('students.index', compact('students', 'name'));
    }
}