<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

    <div class="max-w-4xl mx-auto mt-10">

        <h1 class="text-3xl font-bold mb-6">
            Task Manager
        </h1>

        @yield('content')

    </div>

</body>
</html>