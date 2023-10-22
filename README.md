## Tujuan dan Maksud Proyek

Proyek ini bertujuan untuk membuat API RESTful untuk mengelola film. API ini dapat digunakan untuk membuat, membaca, memperbarui, dan menghapus film.

## Cara Menjalankan Proyek

Untuk menjalankan proyek ini, Anda perlu mengikuti langkah-langkah berikut:

## Endpoint API

Proyek ini menyediakan beberapa endpoint API untuk mengelola film:

GET /movies: Mendapatkan daftar semua film.
POST /movies: Menambahkan film baru.
GET /movies/{id}: Mendapatkan film dengan ID tertentu.
PUT /movies/{id}: Memperbarui film dengan ID tertentu.
DELETE /movies/{id}: Menghapus film dengan ID tertentu.
Authentikasi

Proyek ini menggunakan autentikasi Laravel untuk melindungi beberapa endpoint API. Untuk mengakses endpoint API yang dilindungi, Anda perlu terlebih dahulu membuat akun pengguna. Anda dapat membuat akun pengguna dengan menggunakan endpoint API berikut:

POST /api/auth/register: Mendaftarkan pengguna baru.
POST /api/auth/login: Masuk ke akun pengguna.
Setelah Anda memiliki akun pengguna, Anda dapat menggunakan token akses untuk mengakses endpoint API yang dilindungi. Anda dapat mendapatkan token akses dengan menggunakan endpoint API berikut:

POST /api/auth/token: Mendapatkan token akses.
Untuk menggunakan token akses, Anda perlu menambahkannya ke header permintaan HTTP Anda. Anda dapat menambahkan token akses dengan menggunakan header Authorization dengan nilai Bearer {token_access}.
