# Qword Final Task Submission

## Tech Stack

Proyek ini dibangun menggunakan beberapa teknologi, di antaranya:

- **Laravel**: Framework PHP yang digunakan untuk pengembangan web.
- **HTML/CSS**: Bahasa markup dan gaya untuk struktur dan penampilan website.
- **JavaScript**: Bahasa pemrograman yang digunakan untuk membuat interaktivitas pada website.
- **Alphine**: Framework javascript ringan yang dapat digunakan untuk berinteraksi dengan halaman website langsung melalui markup HTML.
- **Tailwind**: Kerangka kerja front-end yang memudahkan dalam merancang desain website.
- **Aos**: Pustaka JavaScript untuk membuat efek section interaktif.
- **Composer**: Manajer ketergantungan PHP yang digunakan untuk mengelola paket dan alat pihak ketiga.
- **Git**: Sistem kontrol versi yang digunakan untuk manajemen kode.

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal.

### Prasyarat

Pastikan Anda telah menginstal perangkat lunak berikut sebelum memulai:

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/) (^8.0.2)

### Langkah-langkah

1. **Clone repositori ini:**

    ```bash
    git clone https://github.com/awimaulana19/landing-page-qwords.git
    ```

2. **Masuk ke direktori proyek:**

    ```bash
    cd landing-page-qwords
    ```

3. **Instal dependencies menggunakan Composer:**

    ```bash
    composer install
    ```

4. **Buat file .env:**

    Duplikat file `.env.example` dan ubah nama menjadi `.env`. Kemudian konfigurasikan file `.env` sesuai dengan pengaturan lingkungan Anda seperti pengaturan database dan lainnya.

5. **Buat kunci aplikasi:**

    ```bash
    php artisan key:generate
    ```

6. **Jalankan server lokal:**

    ```bash
    php artisan serve
    ```

7. **Buka aplikasi di browser:**

    Aplikasi sekarang dapat diakses di [http://localhost:8000](http://localhost:8000) atau port yang ditetapkan oleh perintah `php artisan serve`.

## Template

[mhaecal/skilline-landing-page](https://github.com/mhaecal/skilline-landing-page)
