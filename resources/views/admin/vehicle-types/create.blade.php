@extends('layouts.admin')

@section('content')
    <h1>Thêm loại xe</h1>

    <form action="{{ route('admin.vehicle-types.store') }}" method="POST" class="form-vertical">
        @csrf

        <div class="form-group">
            <label for="name">Tên loại xe</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" required>
        </div>

        <div class="form-group">
            <label for="total_quantity">Tổng số lượng</label>
            <input type="number" name="total_quantity" id="total_quantity" required>
        </div>

        <div class="form-group">
            <label for="available_quantity">Số xe trống</label>
            <input type="number" name="available_quantity" id="available_quantity" required>
        </div>

        <div class="form-group">
            <label for="test_drive_quantity">Đang được đặt lái thử</label>
            <input type="number" name="test_drive_quantity" id="test_drive_quantity" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">Lưu</button>
        </div>
    </form>
@endsection
