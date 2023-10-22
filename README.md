## Tujuan dan Maksud Proyek

Proyek ini bertujuan untuk membuat API RESTful untuk mengelola film. API ini dapat digunakan untuk membuat, membaca, memperbarui, dan menghapus film.

## Cara Menjalankan Proyek

Untuk menjalankan proyek ini, Anda perlu mengikuti langkah-langkah berikut:

1. Klon proyek dari GitHub. Anda dapat menggunakan perintah berikut untuk kloning proyek:
```git clone https://github.com/[nama-pengguna]/[nama-proyek].git```

2. Buka folder proyek di editor teks.

3. Sesuaikan file .env dengan kredensial database Anda.

4. Jalankan perintah berikut untuk membuat database:
```php artisan migrate```

5. Jalankan perintah berikut untuk menginstal paket dependensi:
```composer install```

6. Jalankan perintah berikut untuk memulai server:
```php artisan serve```


Setelah server dimulai, dapat mengakses aplikasi di browser dengan mengunjungi ```http://localhost:8000```.
