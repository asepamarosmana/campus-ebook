Sebuah project website sederhana, dengan fitur:
- Navbar dengan logo, search bar, dan tombol login.
- Desain responsive (desktop & mobile).
- Struktur kode rapi dengan pemisahan file (HTML, CSS, PHP).

## 📂 Struktur Folder

 app/
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
   cd campus-ebook
   
3. Jalankan di server lokal (XAMPP/Laragon).

4. Buka browser dan akses:
   ```bash
   http://localhost/campus-ebook


# 📂 Struktur Database
```sql
### 1. Tabel `users`
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

2. Tabel Pengarang
CREATE TABLE Pengarang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pengarang VARCHAR(255) NOT NULL
);
3. Tabel buku
CREATE TABLE BUKU (
    id_buku INT AUTO_INCREMENT PRIMARY KEY,
    judul_buku VARCHAR(255) NOT NULL,
    patch_file VARCHAR(255) NOT NULL,
    patch_image VARCHAR(255) NOT NULL,
    id INT NOT NULL,
    FOREIGN KEY (id) REFERENCES pengarang(id)
);
```
📌 Contoh Data
Tabel users
id	first_name	last_name	email	password	created_at


Tabel pengarang
id	nama_pengarang
1	Hanna Zakkiyah
3	Hikmah Ubaidillah
4	AHMAD ‘ABDUL 'AL AL-THAHTHAWI
5	muhammad ahmad vadaq
6	Ro’fah
7	mardigu wowiek prasantyo
8	windri maharani
9	muhammad iqbal al-sinjawy


Tabel buku
id_buku	judul_buku	patch_file	patch_image	id
1	Bahasa jepang itu gampang	app/view/assets/pdf/Bahasa_Jepang_Itu_Gampang.pdf	assets/image/Bahasa_jepang_itu_gampang.png	1
2	150_kisah_ali_bin_abi_thalib	app/view/assets/pdf/150_Kisah_Ali_Bin_Abi_Thalib.pdf	assets/image/150_kisah_ali_bin_abi_thalib.png	4
3	Buku_farfum_panduan_tips...	app/view/assets/pdf/Buku_Parfum_Panduan_Tips.pdf	assets/image/Buku_farfum_panduan.png	3
4	Dalil_syari_maulid_nabi	app/view/assets/pdf/Dalil_Syari_Maulid_Nabi.pdf	assets/image/Dalil_syari_maulid_nabi.png	5
5	fikih_ramah_difable	app/view/assets/pdf/Fikih_Ramah_Difable.pdf	assets/image/fikih_ramah_difable.png	6
6	income_hack_bluefrint	app/view/assets/pdf/Income_Hack_Blueprint.pdf	assets/image/income_hack_bluefrint.png	7
7	Seni_membaca_pikiran	app/view/assets/pdf/Seni_Membaca_Pikiran.pdf	assets/image/Seni_membaca_pikiran.png	8
8	Sunnah_nabi_24_jam	app/view/assets/pdf/Sunnah_Nabi_24_Jam.pdf	assets/image/Sunnah_nabi_24_jam.png  9


