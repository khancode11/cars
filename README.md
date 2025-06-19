# 🚗 XÂY DỰNG WEBSITE QUẢNG CÁO XE Ô TÔ

## 📌 Giới thiệu
Đây là đồ án môn học với đề tài **"Xây dựng website quảng cáo xe ô tô"**. Website được xây dựng bằng Laravel, hỗ trợ người dùng xem thông tin các mẫu xe, đặt lịch lái thử, quản lý phương tiện và người dùng qua giao diện quản trị.

## 🧑‍💻 Thành viên thực hiện
- **Điêu Văn Khản**
- **Vũ Tiến Đạt**
- **Nguyễn Kim Khương**

## ⚙️ Công nghệ sử dụng
- **Laravel** (PHP Framework)
- **MySQL** (Cơ sở dữ liệu)
- **Tailwind CSS** (Thiết kế giao diện)
- **Blade Templating** (Giao diện Laravel)
- **Git + GitHub** (Quản lý mã nguồn)

## 🔧 Chức năng chính
### Người dùng
- Xem danh sách các mẫu xe
- Đặt lịch lái thử
- Quản lý tài khoản

### Quản trị viên
- Quản lý người dùng
- Quản lý các mẫu xe
- Quản lý lịch lái thử
- Quản lý loại xe

## 🚀 Cài đặt (local)
```bash
git clone https://github.com/khancode11/cars
cd cars
npm install
npm run dev
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
