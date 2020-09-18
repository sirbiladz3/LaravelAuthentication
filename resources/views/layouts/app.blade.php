<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaravelAuth</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
<nav class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
        <li>
            <a href="" class="p-3">Home</a>
        </li>
        <li>
            <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
        </li>
    </ul>
    <ul class="flex items-center">
        <li>
            <a href="" class="p-3">Login</a>
        </li>
        <li>
            <a href="" class="p-3">Register</a>
        </li>
        <li>
            <a href="" class="p-3">Tornike Sirbiladze</a>
        </li>
        <li>
            <a href="" class="p-3">Logout</a>
        </li>

    </ul>
</nav>
<div class="container mx-auto mt-6 px-6">
    @yield('content')
</div>
</body>
</html>
