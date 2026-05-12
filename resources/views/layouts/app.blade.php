<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCourse Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body.dark-mode {
            background-color: #121212;
            color: white;
        }

        .dark-mode .card {
            background-color: #1f1f1f;
            color: white;
        }

        .dark-mode .table {
            color: white;
        }

        .dark-mode .list-group-item {
            background-color: #1f1f1f;
            color: white;
        }

        .dark-mode .form-control {
            background-color: #1f1f1f;
            color: white;
            border: 1px solid #555;
        }

    </style>

</head>
<body>

@include('partials.navbar')

<div class="container mt-4">

    <div class="text-end mb-3">

        <button onclick="toggleDarkMode()"
                class="btn btn-dark">

            Toggle Dark Mode

        </button>

    </div>

    @yield('content')

</div>

@include('partials.footer')

<script>

    function toggleDarkMode() {

        document.body.classList.toggle('dark-mode');

    }

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>