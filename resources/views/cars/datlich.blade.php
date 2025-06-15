<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Lái Thử</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/datlich.css') }}" />
</head>
<body>
    <header class="header">
        <img src="https://inkythuatso.com/uploads/images/2021/11/logo-bmw-inkythuatso-4-01-11-09-58-45.jpg" alt="BMW Logo" class="logo">
        <nav class="nav">
            <a href="{{ url('/home') }}">Trang Chủ</a>
            <a href="{{ url('/mauxe') }}">Mẫu Xe</a>
            <a href="{{ url('/datlich') }}">Đặt Lịch Lái Thử</a>
            <a href="{{ url('/phanphoi') }}">Hệ thống phân phối</a>
        </nav>
    </header>

    <section class="hero">
        <div class="form-container">
            <h1>ĐĂNG KÝ LÁI THỬ XE BMW</h1>
            @if (session('success'))
                <div style="color: green; font-weight: bold;">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('testdrive.store') }}" method="POST">
            @csrf
                <label>Họ và Tên *</label>
                <input type="text" name="name" placeholder="Nhập họ và tên" required>

                <label>Số điện thoại *</label>
                <input type="text" name="phone" placeholder="Nhập số điện thoại" required>

                <label>Email *</label>
                <input type="email" name="email" placeholder="Nhập email">

                <label>Địa chỉ *</label>
                <input type="text" name="address" placeholder="Nhập địa chỉ">
                 <label>Mẫu xe *</label>
                <select name="car_model" required>
                    <option value="">Chọn mẫu xe</option>
                    <option value="BMW 320i">BMW 3 Series</option>
                    <option value="BMW X5">BMW 5 Series</option>
                    <option value="BMW i4">BMW X5</option>
                    <option value="BMW X7">BMW X7</option>
                </select>

                <label for="test_date">Thời gian lái thử *</label>
                <input type="datetime-local" name="test_date" id="test_date" required>

                <button type="submit">Gửi đăng ký</button>
            </form>
        </div>
    </section>
</body>
</html>
