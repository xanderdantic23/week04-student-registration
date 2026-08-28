<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Registration System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-gray-100 font-sans min-h-screen flex flex-col justify-between">

    <header class="app-header">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold text-white tracking-wide">
                <a href="{{ route('students.create') }}">STUDENT REGISTRATION</a>
            </h1>
            <nav class="space-x-6 text-sm">
                <a href="{{ route('students.create') }}" class="text-white hover:text-gray-300 font-semibold">Register</a>
                <a href="{{ route('students.index') }}" class="text-white hover:text-gray-300 font-semibold">Student List</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

</body>
</html>