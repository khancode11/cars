<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BMW MK</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  
</head>
<body>
  <header>
    <h1>BMW</h1>
    <nav>
  <a href="{{ url('/home') }}">Trang Chủ</a>
  <a href="{{ url('/mauxe') }}">Mẫu Xe</a>
  <a href="{{ url('/datlich') }}">Đặt Lịch Lái Thử</a>
  <a href="{{ url('/phanphoi') }}">Hệ thống phân phối</a>

  @guest
    <a href="{{ url('/login') }}">Đăng nhập</a>
    <a href="{{ url('/register') }}">Đăng ký</a>
  @endguest

  @auth
    <span>Xin chào, {{ Auth::user()->name }}</span>
    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
      @csrf
      <button type="submit" style="background: none; border: none; color: blue; cursor: pointer;">
        Đăng xuất
      </button>
    </form>
  @endauth
</nav>

  </header>

  <section class="hero">
    <div class="hero-content">
      
    </div>
  </section>

  <section class="about">
    <h3>Về BMW MK</h3>
    <p>BMW MK là nơi bạn có thể tìm hiểu về các dòng xe nổi bật và trải nghiệm dịch vụ lái thử chuyên nghiệp.</p>
  </section>
  
  <footer>
    <p>© 2025 BMW Demo. Bản quyền thuộc về BMW Demo.</p>
  </footer>
</body>
</html>
