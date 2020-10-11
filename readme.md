
## Sistem Informasi Laboratorium Kampus

Ini adalah contoh sistem peminjaman laboratorium.
dibuat menggunakan Laravel

## Cara installasi
1. clone repo menggunakan perintah git clone
2. melakukan composer install
3. copy .env.example dan rename hasil copy menjadi .env
4. konfigurasi file .env
    a. atur data base : DB_DATABASE=namadatabase dan DB_USERNAME=root
    b. atur base url : APP_URL=http://127.0.0.1:8000/
5. jalankan perintah "php artisan key:generate"
6. jalankan perintah "php artisan migrate"
7. done