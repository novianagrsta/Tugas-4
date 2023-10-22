## Tujuan dan Maksud Proyek

Proyek ini bertujuan untuk membuat API RESTful untuk mengelola film. API ini dapat digunakan untuk membuat, membaca, memperbarui, dan menghapus film.

## Cara Menjalankan Proyek

Untuk menjalankan proyek ini, Anda perlu mengikuti langkah-langkah berikut:

1. Klon proyek dari GitHub

Untuk kloning proyek dari GitHub, Anda dapat menggunakan perintah berikut:

git clone https://github.com/[nama-pengguna]/[nama-proyek].git
Perintah ini akan membuat folder baru dengan nama [nama-proyek] di direktori saat ini.

2. Buka folder proyek di editor teks

Setelah Anda kloning proyek, buka folder proyek di editor teks.

3. Sesuaikan file .env dengan kredensial database Anda

File .env berisi variabel lingkungan untuk aplikasi Anda. Anda perlu menyesuaikan nilai variabel DB_USERNAME dan DB_PASSWORD dengan kredensial database Anda.

4. Jalankan perintah berikut untuk membuat database

Perintah berikut akan membuat database untuk aplikasi Anda:

php artisan migrate
5. Jalankan perintah berikut untuk menginstal paket dependensi

Perintah berikut akan menginstal paket dependensi yang diperlukan untuk menjalankan aplikasi Anda:

composer install
6. Jalankan perintah berikut untuk memulai server

Perintah berikut akan memulai server lokal untuk aplikasi Anda:

php artisan serve
Setelah server dimulai, Anda dapat mengakses aplikasi Anda di browser dengan mengunjungi http://localhost:8000.
