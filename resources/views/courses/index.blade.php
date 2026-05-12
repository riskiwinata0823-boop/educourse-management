@extends('layouts.app')

@section('content')

<h1 class="mb-4">Courses Data</h1>

<div class="table-responsive">

<table class="table table-bordered table-hover">

    <thead class="table-dark">

        <tr>
            <th>No</th>
            <th>Course</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Lecturer</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

    </thead>

    <tbody>

        @foreach($courses as $course)

        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $course['course'] }}</td>
            <td>{{ $course['sks'] }}</td>
            <td>{{ $course['semester'] }}</td>
            <td>{{ $course['lecturer'] }}</td>

            <td>

                @if($course['type'] == 'Wajib')

                    <span class="badge bg-primary">
                        Wajib
                    </span>

                @else

                    <span class="badge bg-warning">
                        Pilihan
                    </span>

                @endif

            </td>

            <td>

                <a href="/course/{{ $course['id'] }}"
                   class="btn btn-success btn-sm">

                    Detail

                </a>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endsection