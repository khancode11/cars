<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý loại xe</title>
    <link rel="stylesheet" href="{{ asset('css/danhsachxe.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="layout">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
            <i class="fas fa-car"></i> <span>AutoElite</span>
        </div>
        <nav>
            <h4>Dashboard</h4>
            <a class="nav-item" href="/overview">
                <i class="fas fa-chart-line"></i> Overview
            </a>
            <h4>Management</h4>
            <a class="nav-item" href="/users">
                <i class="fas fa-users"></i> User Management
            </a>
            <a class="nav-item highlight" href="/vehicles">
                <i class="fas fa-car-side"></i> Vehicle Management
            </a>
            <a class="nav-item" href="/test-drives">
                <i class="fas fa-calendar-check"></i> Test Drives
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <div class="container">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
