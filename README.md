# Undangan Pernikahan Digital - Rina & Dimas

## Deskripsi
Website undangan pernikahan digital yang elegan dengan desain 3D, kalem, dan nuansa budaya Sunda.

## Teknologi
- PHP 7.4+
- CodeIgniter 3
- MySQL
- HTML5, CSS3, JavaScript

## Cara Instalasi

### 1. Setup Database
```sql
CREATE DATABASE undangan_sunda;
USE undangan_sunda;

CREATE TABLE tamu (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    konfirmasi ENUM('Hadir','Tidak Hadir','Mungkin') DEFAULT 'Mungkin',
    jumlah INT DEFAULT 1,
    ucapan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 2. Edit Konfigurasi
Edit file `application/config/database.php` sesuai database Anda:
- hostname: localhost (atau sesuai)
- username: root (atau sesuai)
- password: (isi password Anda)
- database: undangan_sunda

### 3. Edit Config Base URL
Edit file `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/undangan-pernikahan-sunda/';
```

### 4. Jalankan
- Buka browser: `http://localhost/undangan-pernikahan-sunda`
- Halaman utama akan muncul

## File Penting untuk Diedit

### Data Pasangan
- Edit di: `application/controllers/Home.php`
- Ubah: nama, tanggal, lokasi, dll

### Desain & Warna
- CSS: `assets/css/style.css`
- Layout: `application/views/templates/main_layout.php`

### Foto
- Simpan di: `assets/img/`
- Update di view file

## Fitur
✓ Halaman utama dengan hero section
✓ Countdown timer
✓ Profil pasangan
✓ Detail acara (Akad & Resepsi)
✓ Gallery foto
✓ Form RSVP
✓ Guestbook ucapan
✓ Desain responsif
✓ Efek 3D dan animasi
✓ Nuansa budaya Sunda

## Struktur Folder
```
undangan-pernikahan-sunda/
├── application/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   └── views/
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
├── .htaccess
└── index.php
```

## Support
Jika ada pertanyaan, silakan edit file-file sesuai kebutuhan Anda.
