<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Types</title>
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
            <a class="nav-item active" href="/overview">
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
            <h1>Danh sách các loại xe</h1>
            <table>
                    <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Model</th>
                    <th>Tổng số lượng</th>
                    <th>Số xe trống</th>
                    <th>Đang được đặt lái thử</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicleTypes as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->model }}</td>
                        <td>{{ $type->total_quantity }}</td>
                        <td>{{ $type->available_quantity }}</td>
                        <td>{{ $type->test_drive_quantity }}</td>
                    </tr>
                @endforeach
            </table>

            <div class="add-btn-container">
                <button class="btn edit">Sửa</button>
                <button class="btn delete">Xoá</button>
                <button class="btn add">+ Thêm loại xe</button>
            </div>
        </div>
    </main>
</div>
</body>
</html>
