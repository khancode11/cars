<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Mẫu Xe BMW</title>
  @vite('resources/css/mauxe.css')
</head>
<body>
  <header>
    <div class="logo">
      <img src="{{ asset('ảnh\tải xuống.jpg') }}" alt="BMW Logo">
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
        <img src="{{ asset('images/bmw1.jpg') }}" alt="BMW 3 Series">
        <div class="info">
          <h3>BMW 3 Series</h3>
          <p>Thiết kế thể thao, nội thất sang trọng, hiệu suất vượt trội.</p>
        </div>
      </div>
      <div class="car-card">
        <img src="{{ asset('images/bmw2.jpg') }}" alt="BMW 5 Series">
        <div class="info">
          <h3>BMW 5 Series</h3>
          <p>Sự cân bằng hoàn hảo giữa sang trọng và công nghệ tiên tiến.</p>
        </div>
      </div>
      <div class="car-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYjqDh7nFnpUN-BM0r4JOlVIJg6O7Tq-5U4Q&s" alt="BMW X5">
        <div class="info">
          <h3>BMW X5</h3>
          <p>Xe SUV cao cấp với khả năng vận hành mạnh mẽ và linh hoạt.</p>
        </div>
      </div>
      <div class="car-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSzGO02ELxUKVIR6gFaGbTmUgQkAHycbjNxA&s" alt="BMW X7">
        <div class="info">
          <h3>BMW X7</h3>
          <p>Phong cách sang trọng và không gian rộng rãi cho cả gia đình.</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
