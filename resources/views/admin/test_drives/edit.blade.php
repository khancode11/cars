@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-8 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Chỉnh sửa lịch lái thử</h2>

    <form action="{{ route('testdrive.update', $drive->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Họ tên</label>
            <input type="text" name="name" value="{{ $drive->name }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" value="{{ $drive->email }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Số điện thoại</label>
            <input type="text" name="phone" value="{{ $drive->phone }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Địa chỉ</label>
            <input type="text" name="address" value="{{ $drive->address }}" class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Mẫu xe</label>
            <input type="text" name="car_model" value="{{ $drive->car_model }}" class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Thời gian lái thử</label>
            <input type="datetime-local" name="test_drive_time" value="{{ \Carbon\Carbon::parse($drive->test_drive_time)->format('Y-m-d\TH:i') }}" class="w-full border px-3 py-2 rounded">
        </div>

        <div class="flex justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Cập nhật</button>
            <a href="{{ route('account.home') }}" class="text-gray-600 hover:underline">Quay lại</a>
        </div>
    </form>
</div>
@endsection
