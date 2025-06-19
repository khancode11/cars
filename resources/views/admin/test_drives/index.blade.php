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
                @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
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
                            <td class="text-red-500">
                                {{ \Carbon\Carbon::parse($drive->test_drive_time)->format('d/m/Y H:i') }}
                            </td>
                            <td class="flex gap-2">
    {{-- Nút Sửa --}}
    <a href="{{ route('testdrive.edit', $drive->id) }}"
       class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-yellow-500 rounded hover:bg-yellow-600 transition">
        ✏️ <span class="ml-1">Sửa</span>
    </a>

    {{-- Nút Xóa --}}
    <form action="{{ route('testdrive.destroy', $drive->id) }}"
          method="POST"
          onsubmit="return confirm('Bạn có chắc muốn xóa lịch hẹn này?');"
          class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit"
                class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-red-500 rounded hover:bg-red-600 transition">
            🗑️ <span class="ml-1">Xóa</span>
        </button>
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
