# Aplikasi Blog - Firman Fadilah Noor - 240605110083

## Deskripsi

Sistem Manajemen Blog (CMS) berbasis Laravel yang memiliki fitur pengelolaan artikel, penulis, dan kategori artikel, serta halaman publik untuk pengunjung.

## Cara Menjalankan Aplikasi

1. Clone repositori ini:
   ```bash
   git clone https://github.com/Firman Fadilah Noor/aplikasi-blog-240605110083.git
   ```

2. Masuk ke folder proyek:
   ```bash
   cd aplikasi-blog-240605110083
   ```

3. Install dependency PHP:
   ```bash
   composer install
   ```

4. Install dependency frontend:
   ```bash
   npm install
   npm run build
   ```

5. Salin file `.env`:
   ```bash
   cp .env.example .env
   ```

6. Generate app key:
   ```bash
   php artisan key:generate
   ```

7. Sesuaikan konfigurasi database di file `.env`:
   ```env
   DB_DATABASE=db_blog
   DB_USERNAME=root
   DB_PASSWORD=
   ```

8. Jalankan migration dan seeder:
   ```bash
   php artisan migrate --seed
   ```

9. Buat symbolic link storage:
   ```bash
   php artisan storage:link
   ```

10. Jalankan server:
    ```bash
    php artisan serve
    ```

11. Akses di browser:
    ```text
    http://localhost:8000
    ```

## Login Awal

```text
Username: admin
Password: password
```

## Video Demonstrasi

[Link YouTube](https://youtu.be/dr0TW_OPATE)
