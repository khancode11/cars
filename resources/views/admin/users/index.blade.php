<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý người dùng - AutoElite</title>
    <link rel="stylesheet" href="{{ asset('css/quanliuser.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        
        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="logo">
                <i class="fa fa-car"></i>
                <span>AutoElite</span>
            </div>

            <div class="section">
                <p class="section-title">Dashboard</p>
                <a href="{{ url('/dashboard') }}" class="menu-item active">
                    <i class="fa fa-chart-line"></i>
                    <span>Overview</span>
                </a>
            </div>

            <div class="section">
                <p class="section-title">Management</p>
                <a href="{{ url('/admin/users') }}" class="menu-item">
                    <i class="fa fa-users"></i>
                    <span>User Management</span>
                </a>
                <a href="{{ url('/admin/vehicle-types') }}" class="menu-item">
                    <i class="fa fa-car-side"></i>
                    <span>Vehicle Management</span>
                </a>
                <a href="{{ url('/admin/test-drives') }}" class="menu-item">
                    <i class="fa fa-calendar-check"></i>
                    <span>Test Drives</span>
                </a>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="user-card">
                <div class="user-header">
                    <h1>Danh sách người dùng</h1>
                    <a href="#" class="btn btn-success">Thêm người dùng</a>
                </div>
                <table class="user-table">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Ngày tạo</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xoá người dùng này không?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
