@extends('layouts.app')

@section('content')

<h1 class="mb-4">Students Data</h1>

@if($name)
<div class="alert alert-info">
    Hello, {{ $name }}
</div>
@endif

<div class="mb-3">
    <input type="text" class="form-control" placeholder="Search student...">
</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Major</th>
            <th>Year</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>

        @foreach($students as $student)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['nim'] }}</td>
            <td>{{ $student['major'] }}</td>
            <td>{{ $student['year'] }}</td>

            <td>

                @if($student['status'] == 'Aktif')

                    <span class="badge bg-success">
                        Aktif
                    </span>

                @else

                    <span class="badge bg-danger">
                        Nonaktif
                    </span>

                @endif

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endsection