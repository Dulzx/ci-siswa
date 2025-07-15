# 🎓 CI-SISWA – Sistem Manajemen Data Siswa (CodeIgniter 3)

![CodeIgniter](https://img.shields.io/badge/Framework-CodeIgniter%203-red?logo=codeigniter)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)
![License](https://img.shields.io/badge/License-MIT-blue)
![Responsive](https://img.shields.io/badge/UI-Responsive-blueviolet)

**CI-SISWA** adalah aplikasi manajemen data siswa berbasis web yang dibangun menggunakan framework CodeIgniter 3. Dirancang ringan, modern, dan mudah digunakan untuk kebutuhan sekolah dasar hingga tingkat menengah.

---

## ✨ Fitur Unggulan

- ✅ Tambah, Edit, dan Hapus Data Siswa (CRUD)
- 🔍 Pencarian otomatis berdasarkan nama/NIS
- 📤 Export data ke **Excel dan PDF**
- 🌓 Mode Gelap & Terang (Dark/Light Mode)
- 🎨 UI Modern berbasis **Bootstrap 5 + FontAwesome**
- 📱 Desain **Responsif & Mobile Friendly**
- ⚠️ Konfirmasi penghapusan dengan modal stylish
- 🗃 Disediakan file SQL untuk import data awal

---

## 🚀 Cara Instalasi & Penggunaan

### 📥 1. Clone Repository
```bash
git clone https://github.com/Dulzx/ci-siswa.git
cd ci-siswa
```

### 📦 2. Import Database
- Masuk ke `phpMyAdmin`
- Buat database baru: `ci_siswa`
- Import file `ci_siswa.sql` yang ada di folder ini

### ⚙️ 3. Atur Koneksi Database
Edit file `application/config/database.php`:
```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'ci_siswa',
```

### 🌐 4. Jalankan di Web Browser
Letakkan folder `ci-siswa` di dalam `htdocs` (jika pakai XAMPP), lalu akses:
```
http://localhost/ci-siswa
```

---

## 🧭 Navigasi Aplikasi

- **Dashboard**: Menampilkan total siswa & tombol tambah data
- **Tambah Siswa**: Isi data siswa lengkap (NIS, Nama, Alamat, dsb.)
- **Edit**: Ubah data siswa yang sudah ada
- **Hapus**: Konfirmasi melalui pop-up sebelum penghapusan
- **Cari**: Fitur pencarian real-time di halaman utama
- **Export**: Tombol untuk simpan data ke Excel dan PDF

---

## 📂 Struktur Folder Utama

```
ci-siswa/
├── application/
│   ├── controllers/    // Logika aplikasi
│   ├── models/         // Koneksi DB & query
│   └── views/          // Tampilan HTML
├── assets/             // CSS, JS, ikon
├── ci_siswa.sql        // File database
├── index.php           // Entry point
└── .htaccess           // Routing & URL rewrite
```

---

## 💡 Tips Tambahan

- 🔐 Pastikan `mod_rewrite` diaktifkan di Apache
- 🧪 Gunakan browser modern (Chrome/Edge)
- 🎯 Cocok untuk dijadikan projek tugas akhir atau pembelajaran CI3
- ⚙️ Ingin di-onlinekan? Deploy ke hosting dengan PHP 7.x dan MySQL

---

## 📄 Lisensi

Proyek ini menggunakan lisensi **MIT** – bebas digunakan, dimodifikasi, dan disebarkan, baik untuk pembelajaran maupun keperluan profesional.
