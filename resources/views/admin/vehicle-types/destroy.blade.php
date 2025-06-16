@extends('layouts.admin')

@section('content')
    <h1>Xoá loại xe</h1>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Model</th>
                <th>Tổng số lượng</th>
                <th>Số xe trống</th>
                <th>Đang đặt lái thử</th>
                <th>Xoá</th>
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
                    <td>
                        <form action="{{ route('admin.vehicle-types.destroy', $type->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá loại xe này?')">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end" style="margin-top: 20px;">
        <a href="{{ route('admin.vehicle-types.index') }}" class="btn btn-secondary">← Quay lại danh sách</a>
    </div>
@endsection
