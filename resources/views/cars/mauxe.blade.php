<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Mẫu Xe BMW</title>
  <link rel="stylesheet" href="{{ asset('css/mauxe.css') }}">
</head>
<body>
  <header>
    <div class="logo">
      <img src="https://inkythuatso.com/uploads/images/2021/11/logo-bmw-inkythuatso-4-01-11-09-58-45.jpg" alt="BMW Logo" class="logo">
    </div>
    <nav>
      <ul class="menu">
        <li><a href="{{ url('/home') }}">Trang Chủ</a></li>
        <li><a href="{{ url('/mauxe') }}" class="active">Mẫu Xe</a></li>
        <li><a href="{{ url('/datlich') }}">Đặt Lịch Lái Thử</a></li>
        <li><a href="{{ url('/phanphoi') }}">Hệ thống phân phối</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Khám phá các mẫu xe BMW</h1>
    </div>
  </section>

  <section class="models">
    <div class="car-grid">
      <div class="car-card">
        <img src="https://4kwallpapers.com/images/walls/thumbs_2t/8102.jpg" alt="BMW 3 Series">
        <div class="info">
          <h3>BMW 3 Series</h3>
          <p>Thiết kế thể thao, nội thất sang trọng, hiệu suất vượt trội.</p>
        </div>
      </div>
      <div class="car-card">
        <img src="https://warnersallman.com/1280/6918-alpina-b5-gt-bmw-5-series-.jpg" alt="BMW 5 Series">
        <div class="info">
          <h3>BMW 5 Series</h3>
          <p>Sự cân bằng hoàn hảo giữa sang trọng và công nghệ tiên tiến.</p>
        </div>
      </div>
      <div class="car-card">
        <img src="https://cms-i.autodaily.vn/du-lieu/2023/11/14/bmw-523d-xdrive-first-edition-japan-00002-2048x1382.webp" alt="BMW X5">
        <div class="info">
          <h3>BMW X5</h3>
          <p>Xe SUV cao cấp với khả năng vận hành mạnh mẽ và linh hoạt.</p>
        </div>
      </div>
      <div class="car-card">
        <img src="https://i1-vnexpress.vnecdn.net/2023/05/02/IMG3144JPG-1683007874.jpg?w=750&h=450&q=100&dpr=1&fit=crop&s=cAiV-p3XuWtVwCrI-OlDdw" alt="BMW X7">
        <div class="info">
          <h3>BMW X7</h3>
          <p>Phong cách sang trọng và không gian rộng rãi cho cả gia đình.</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
