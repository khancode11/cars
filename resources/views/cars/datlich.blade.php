<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Lịch Lái Thử</title>
    @vite('resources/css/datlich.css')
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h1>Đặt Lịch Lái Thử BMW</h1>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Họ và Tên" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Số điện thoại" required>
                <select name="model" required>
                    <option value="">Chọn mẫu xe</option>
                    <option value="BMW 3 Series">BMW 3 Series</option>
                    <option value="BMW 5 Series">BMW 5 Series</option>
                    <option value="BMW X5">BMW X5</option>
                </select>
                <input type="date" name="date" required>
                <button type="submit">Đặt Lịch</button>
            </form>
        </div>
    </div>
</body>
</html>
