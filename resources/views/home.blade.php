<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BMW Demo</title>
  @vite('resources/css/app.css')
</head>
<body>
  <header>
    <h1>BMW Demo</h1>
    <nav>
      <a href="{{ url('/home') }}">Trang Chủ</a>
      <a href="{{ url('/mauxe') }}">Mẫu Xe</a>
      <a href="{{ url('/datlich') }}">Đặt Lịch Lái Thử</a>
      <a href="{{ url('/phanphoi') }}">Hệ thống phân phối</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      
    </div>
  </section>

  <section class="about">
    <h3>Về BMW Demo</h3>
    <p>BMW Demo là nơi bạn có thể tìm hiểu về các dòng xe nổi bật và trải nghiệm dịch vụ lái thử chuyên nghiệp.</p>
  </section>

  <footer>
    <p>© 2025 BMW Demo. Bản quyền thuộc về BMW Demo.</p>
  </footer>
</body>
</html>
