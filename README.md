# 📚 Buku Tamu Digital

Aplikasi web modern untuk mengelola data kunjungan tamu secara digital, efisien, dan terorganisir. Dibangun menggunakan Laravel 11 dengan fitur autentikasi dan manajemen data yang aman.

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📋 Daftar Isi

- [Fitur Utama](#-fitur-utama)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Konfigurasi](#-konfigurasi)
- [Penggunaan](#-penggunaan)
- [Struktur Database](#-struktur-database)
- [Screenshot](#-screenshot)
- [Contributing](#-contributing)
- [Lisensi](#-lisensi)
- [Kontak](#-kontak)

## ✨ Fitur Utama

### 🔐 Autentikasi & Keamanan
- **Login & Register** dengan validasi keamanan
- **Session Management** menggunakan Laravel Breeze
- **Password Reset** via email
- **Remember Me** untuk kemudahan akses
- **Proteksi Data Pribadi** - setiap user hanya bisa mengakses data mereka sendiri

### 👥 Manajemen Data Tamu
- **CRUD Lengkap** (Create, Read, Update, Delete)
- **Form Input Modern** dengan validasi real-time
- **Pencatatan Otomatis** waktu kunjungan
- **Kategorisasi Instansi** (Pemerintah, Swasta, Pendidikan, Umum, Lainnya)
- **Data Pribadi per User** - isolasi data antar pengguna

### 📊 Dashboard & Laporan
- **Dashboard Interaktif** dengan statistik real-time
- **Statistik Kunjungan**:
  - Total tamu (pribadi)
  - Kunjungan hari ini
  - Kunjungan minggu ini
  - Kunjungan bulan ini
- **Filter & Pencarian** data berdasarkan:
  - Nama tamu
  - Instansi
  - Jenis instansi
  - Rentang tanggal
- **Export Data** ke PDF dan Excel (dalam pengembangan)

### 🎨 Tampilan & UX
- **Responsive Design** - optimal di desktop, tablet, dan mobile
- **Modern UI/UX** dengan animasi smooth
- **Dark/Light Mode Support**
- **Bootstrap Icons** untuk visual yang menarik
- **Gradient Design** yang eye-catching

### 📄 Halaman Publik
- **Home** - landing page dengan informasi aplikasi
- **About** - tentang sistem buku tamu digital
- **Gallery** - galeri foto fasilitas

## 🛠 Teknologi yang Digunakan

### Backend
- **Laravel 11** - PHP Framework
- **Laravel Breeze** - Authentication scaffolding
- **MySQL 8.0** - Database Management System
- **Eloquent ORM** - Database abstraction

### Frontend
- **Bootstrap 5.3** - CSS Framework
- **Bootstrap Icons** - Icon library
- **Animate.css** - CSS Animation library
- **Custom CSS** - Styling tambahan

### Tools & Libraries
- **Composer** - PHP dependency manager
- **NPM** - Node package manager
- **Carbon** - Date/time manipulation

## 📦 Persyaratan Sistem

Pastikan sistem Anda memenuhi persyaratan berikut:

- **PHP** >= 8.2
- **Composer** >= 2.6
- **MySQL** >= 8.0 atau MariaDB >= 10.11
- **Node.js** >= 18.x (untuk NPM)
- **Apache/Nginx** Web Server

**PHP Extensions yang Diperlukan:**
- OpenSSL
- PDO
- Mbstring
- Tokenizer
- XML
- Ctype
- JSON
- BCMath

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/buku-tamu-digital.git
cd buku-tamu-digital
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
npm run build
```

### 3. Setup Environment
```bash
# Copy file .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Konfigurasi Database

Edit file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tamu
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Buat Database

Buka phpMyAdmin atau MySQL CLI, lalu buat database:
```sql
CREATE DATABASE tamu;
```

### 6. Jalankan Migration
```bash
php artisan migrate
```

### 7. Jalankan Aplikasi
```bash
# Development server
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

## ⚙️ Konfigurasi

### Email Configuration (Optional)

Untuk fitur reset password, konfigurasi email di `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Storage Link

Jika menggunakan file upload:
```bash
php artisan storage:link
```

## 📖 Penggunaan

### Untuk Pengguna Baru

1. **Register Akun**
   - Klik tombol "Register" di halaman utama
   - Isi form registrasi (Nama, Email, Password)
   - Klik "Daftar"

2. **Login**
   - Masukkan email dan password
   - Centang "Remember Me" untuk tetap login
   - Klik "Sign In"

3. **Tambah Data Tamu**
   - Setelah login, klik "Tambah Tamu Baru" di dashboard
   - Isi form data tamu:
     - Nama lengkap
     - Jenis instansi
     - Nama instansi
     - Email
     - Maksud dan tujuan kunjungan
   - Klik "Simpan"

4. **Lihat & Kelola Data**
   - Menu "Data Tamu" untuk melihat semua data tamu Anda
   - Gunakan tombol aksi untuk:
     - 👁️ Lihat detail
     - ✏️ Edit data
     - 🗑️ Hapus data

5. **Lihat Laporan**
   - Menu "Laporan" untuk statistik lengkap
   - Filter data berdasarkan tanggal, instansi, dll
   - Export ke PDF/Excel (segera hadir)

### Catatan Penting

⚠️ **Data Pribadi**: Setiap user hanya dapat melihat dan mengelola data tamu yang mereka input sendiri. Data antar user tidak dapat saling diakses.

## 🗄️ Struktur Database

### Tabel: `users`
```sql
id              BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
name            VARCHAR(255) NOT NULL
email           VARCHAR(255) UNIQUE NOT NULL
email_verified_at TIMESTAMP NULL
password        VARCHAR(255) NOT NULL
remember_token  VARCHAR(100) NULL
created_at      TIMESTAMP NULL
updated_at      TIMESTAMP NULL
```

### Tabel: `tamu`
```sql
id              BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
user_id         BIGINT UNSIGNED NOT NULL (FK ke users.id)
nama            VARCHAR(255) NOT NULL
jenis_instansi  ENUM('pemerintah','swasta','pendidikan','umum','lainnya') NOT NULL
nama_instansi   VARCHAR(255) NOT NULL
email           VARCHAR(255) NOT NULL
maksud_tujuan   TEXT NOT NULL
waktu_kunjungan TIMESTAMP DEFAULT CURRENT_TIMESTAMP
created_at      TIMESTAMP NULL
updated_at      TIMESTAMP NULL

FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
```

### Relasi Database

- **User → Tamu**: One to Many (satu user bisa punya banyak data tamu)
- **Cascade Delete**: Jika user dihapus, semua data tamu miliknya ikut terhapus

## 📸 Screenshot

### Halaman Login
![Login Page](docs/screenshots/login.png)

### Dashboard
![Dashboard](docs/screenshots/dashboard.png)

### Form Data Tamu
![Form Tamu](docs/screenshots/form-tamu.png)

### Laporan
![Laporan](docs/screenshots/laporan.png)

## 🤝 Contributing

Kontribusi sangat diterima! Jika Anda ingin berkontribusi:

1. Fork repository ini
2. Buat branch baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 To-Do List

- [ ] Implementasi export ke PDF
- [ ] Implementasi export ke Excel
- [ ] Fitur upload foto tamu
- [ ] Notifikasi email untuk admin
- [ ] Dashboard analytics dengan chart
- [ ] QR Code untuk check-in tamu
- [ ] Dark mode toggle
- [ ] Multi-language support
- [ ] Role & Permission (Admin/User)

## 🐛 Bug Reports & Feature Requests

Jika menemukan bug atau ingin request fitur baru, silakan buat [Issue](https://github.com/username/buku-tamu-digital/issues) di repository ini.

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
```
MIT License

Copyright (c) 2025 Farel Dwi Irawan

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction...
```

## 👨‍💻 Kontak

**Farel Dwi Irawan**

- Email: fareldwiirawan@gmail.com
- Instagram: [@dwikicauu](https://www.instagram.com/dwikicauu/)

---

<div align="center">
  
### ⭐ Jangan lupa beri bintang jika project ini membantu! ⭐

**Made by Farel Dwi Irawan**

</div>