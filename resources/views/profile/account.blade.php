@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="bg-blue-600 text-white p-6 w-full md:w-1/4">
            <div class="flex flex-col items-center">
                <!-- Avatar giả -->
                <div class="w-24 h-24 bg-white rounded-full mb-4"></div>
                
                <!-- Tên người dùng -->
                <h2 class="text-xl font-semibold">{{ Auth::user()->name }}</h2>

                <!-- Email -->
                <p class="text-sm break-words">{{ Auth::user()->email }}</p>
            </div>

            <nav class="mt-6 space-y-2">
                <a href="{{ route('account.home') }}" class="block px-4 py-2 rounded bg-blue-700 hover:bg-blue-800">
                    🏠 Trang chủ
                </a>
                <a href="{{ route('account.home') }}" class="block px-4 py-2 rounded hover:bg-blue-500">
                    👤 Lịch hẹn
                </a>
                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 rounded bg-red-600 hover:bg-red-700">
                        🚪 Đăng xuất
                    </button>
                </form>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-6 bg-gray-50">
            <h1 class="text-2xl font-bold mb-2">Xin chào, {{ Auth::user()->name }}!</h1>
            <p class="text-gray-600 mb-6">Đây là trang quản lý tài khoản của bạn, nơi bạn có thể quản lý hồ sơ và cài đặt tài khoản.</p>

            <!-- Nội dung tùy chọn -->
            <div class="bg-white rounded shadow p-4">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">#</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Tên</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Địa chỉ</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Mẫu xe</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Thời gian hẹn</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse ($appointments as $index => $item)
                            <tr>
                                <td class="px-4 py-2">{{ $index + 1 }}</td>
                                <td class="px-4 py-2">{{ $item->name }}</td>
                                <td class="px-4 py-2">{{ $item->address }}</td>
                                <td class="px-4 py-2">{{ $item->car_model }}</td>
                                <td class="px-4 py-2 text-red-500">{{ \Carbon\Carbon::parse($item->test_drive_time)->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-2 text-center text-gray-500">Không có lịch hẹn nào.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection