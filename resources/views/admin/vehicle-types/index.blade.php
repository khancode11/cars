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
            <a class="nav-item highlight" href="/cars/public/admin/vehicle-types">
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
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->model }}</td>
                            <td>{{ $type->total_quantity }}</td>
                            <td>{{ $type->available_quantity }}</td>
                            <td>{{ $type->test_drive_quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="button-group text-end">
                <a href="{{ route('vehicle-types.create') }}" class="btn btn-success">+ Thêm loại xe</a>
                <a href="{{ route('vehicle-types.edit', $vehicleTypes->first()->id ?? 1) }}" class="btn btn-primary">Sửa</a>
                <form action="{{ route('vehicle-types.destroy', $vehicleTypes->first()->id ?? 1) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Xoá loại xe này?')">Xoá</button>
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>
