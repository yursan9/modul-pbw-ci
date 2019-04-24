# Modul PBW ITI

Lumbung ini berisi contoh kode dan modul untuk pertemuan praktikum
Pemrograman Berbasi Web pada Institut Teknologi Indonesia.

Pergi ke halaman untuk mengunduh kode dan modul:
https://github.com/yursan9/modul-pbw-ci/releases

## Testing dengan Docker

Lumbung ini menyediakan file `docker-compose.yml` yang dapat digunakan
untuk menjalankan situs web dengan Docker. Dibangun dengan menggunakan
*images* `php`, `mariadb`, dan `phpmyadmin`. Pastikan kalian memasang
`docker` dan `docker-compose` sebelum menggunakan `docker-compose.yml`.

Jalankan perintah di bawah ini untuk memulai server:

```
docker-compose up -d
```

Setelah itu kalian dapat membuka `localhost` untuk melihat halaman utama
situs web dan `localhost:8000` untuk melihat `phpmyadmin`. Gunakan
`docker-compose down` untuk menghentikan layanan server.
