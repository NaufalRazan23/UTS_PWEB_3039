<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Mini Project Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .content-wrapper {
            min-height: calc(100vh - 160px);
        }
    </style>

    @yield('styles')
</head>
<body>
    <!-- Navbar Component -->
    <x-navbar />

    <!-- Main Content -->
    <div class="content-wrapper">
        <div class="container py-4">
            @yield('content')
        </div>
    </div>

    <!-- Footer Component -->
    <x-footer />

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>
