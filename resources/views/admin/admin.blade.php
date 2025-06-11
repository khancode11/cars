<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Admin - BMW Demo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-900 text-white p-4">
        <h1 class="text-xl font-bold">Quản Trị Hệ Thống BMW</h1>
    </header>
    <div class="flex">
        <nav class="w-1/5 bg-white h-screen p-4 shadow">
            <ul class="space-y-2">
                <li><a href="{{ route('admin.dashboard') }}">📊 Dashboard</a></li>
                <li><a href="{{ route('admin.cars') }}">🚗 Quản lý xe</a></li>
                <li><a href="{{ route('admin.testdrives') }}">📅 Quản lý lái thử</a></li>
            </ul>
        </nav>
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
