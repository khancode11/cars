<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý lịch lái thử</title>
    <link rel="stylesheet" href="{{ asset('css/quanlilich.css') }}">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2 class="brand">AutoElite</h2>
            <div class="section">
                <p class="section-title">Dashboard</p>
                <a href="{{ url('/dashboard') }}" class="menu-item active">Overview</a>
            </div>
            <div class="section">
                <p class="section-title">Management</p>
                <a href="{{ url('/admin/users') }}" class="menu-item">User Management</a>
                <a href="{{ url('/admin/vehicle-types') }}" class="menu-item purple">Vehicle Management</a>
                <a href="{{ url('/admin/test-drives') }}" class="menu-item">Test Drives</a>
            </div>
        </aside>

        <!-- Main content -->
        <main class="main-content">
            <div class="container">
                <h1>Quản lý lịch lái thử</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Xe đăng ký</th>
                            <th>Thời gian lái thử</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testDrives as $drive)
                        <tr>
                            <td>{{ $drive->id }}</td>
                            <td>{{ $drive->name }}</td>
                            <td>{{ $drive->phone }}</td>
                            <td>{{ $drive->email }}</td>
                            <td>{{ $drive->address }}</td>
                            <td>{{ $drive->car_model }}</td>
                            <td>{{ $drive->test_drive_time }}</td>
                            <td>
                                <a href="#" class="edit-btn">Sửa</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
