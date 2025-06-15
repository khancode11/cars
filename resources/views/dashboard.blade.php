<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AutoElite Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo">
        <i class="fas fa-car"></i><span>AutoElite</span>
      </div>
      <nav>
        <h4>Dashboard</h4>
        <ul>
          <li class="active"><i class="fas fa-chart-line"></i> Overview</li>
        </ul>
        <h4>Management</h4>
        <ul>
          <li><i class="fas fa-users"></i> User Management</li>
          <li><i class="fas fa-car-side"></i><a href="{{ url('/admin/vehicle-types') }}">Vehicle Management</a></li>
          <li><i class="fas fa-calendar-check"></i> Test Drives</li>
        </ul>
      </nav>
      <div class="user">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin">
        <div>
          <p>Admin User</p>
          <span>Super Admin</span>
        </div>
      </div>
    </aside>

    <!-- Content -->
    <main class="main-content">
      <header>
        <h1>Dashboard Overview</h1>
        <input type="text" placeholder="Search...">
      </header>

      <section class="stats">
        <div class="card blue">
          <i class="fas fa-users"></i>
          <div>
            <h3>Total Users</h3>
            <p>1,248</p>
          </div>
        </div>

        <div class="card green">
          <i class="fas fa-car"></i>
          <div>
            <h3>Available Vehicles</h3>
            <p>87</p>
          </div>
        </div>

        <div class="card purple">
          <i class="fas fa-calendar-alt"></i>
          <div>
            <h3>Test Drives</h3>
            <p>56</p>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
