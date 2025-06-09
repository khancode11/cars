@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm ô tô mới</h2>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tên ô tô</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Hãng xe</label>
            <input type="text" name="brand" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Giá bán (VND)</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <button class="btn btn-primary">Lưu</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
