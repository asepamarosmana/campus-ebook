Sebuah project website sederhana, dengan fitur:
- Navbar dengan logo, search bar, dan tombol login.
- Desain responsive (desktop & mobile).
- Struktur kode rapi dengan pemisahan file (HTML, CSS, PHP).

## 📂 Struktur Folder
project-web-gdsc/
│── app/
│ ├── config/ # File konfigurasi (contoh: connect.php)
│ ├── view/ # File tampilan (navbar, halaman login, dll)
│ │ ├── assets/
│ │ │ ├── css/ # File CSS
│ │ │ ├── js/ # File Javascript
│ │ │ └── image/# Gambar/logo
│ │ ├── sign-in.php
│ │ ├── log-in.php
│ │ └── content-book-list.php
│── index.php

## 🚀 Cara Menjalankan Project
1. Clone repo:
   ```bash
   git clone https://github.com/asepamarosmana/campus-ebook.git
2. Pindah ke folder project:
   ```bash
   cd project-web-gdsc
   
3. Jalankan di server lokal (XAMPP/Laragon).

4. Buka browser dan akses:
   ```bash
   http://localhost/campus-ebook

Teknologi yang Digunakan

HTML untuk struktur

CSS (Flexbox + Media Query) untuk styling responsive

PHP untuk server-side dan include file

MySQL untuk database (opsional, jika digunakan)

Catatan

Pastikan sudah mengaktifkan server lokal (Apache + MySQL).

Jika CSS/JS tidak berubah setelah update, gunakan query string versioning:
```html
<link rel="stylesheet" href="assets/css/style.css?v=2">
   
   
