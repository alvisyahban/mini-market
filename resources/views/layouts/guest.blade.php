<!-- resources/views/layouts/guest.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-800">
    <!-- Main Content -->
    <main class="flex items-center justify-center min-h-screen">
        @yield('content')
    </main>
</body>
</html>