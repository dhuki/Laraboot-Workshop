# LaraBoot - Laravel Bootsrap Workshop

by [TEL-C Laboratory](http://laraboot.telclab.xyz)

## Installation

1. Lakukan Clonning Repository

```bash
git clone https://github.com/fakhrifauzan/Laraboot-Workshop.git
```

2. Masuk ke folder `Laraboot-Workshop`

```bash
cd Laraboot-Workshop
```

3. Lakukan instalasi Dependency Laravel

```composer
composer update
```

4. Lakukan duplikasi file `.env.example` menjadi `.env`
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Disesuaikan dengan nama database
DB_USERNAME=Disesuaikan dengan username database
DB_PASSWORD=Disesuaikan dengan password database
```

Contohnya seperti dibawah ini :

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laraboot
DB_USERNAME=root
DB_PASSWORD=
```

5. Lakukan Generate key pada project Laravel
```bash
php artisan key:generate
```

6. Lakukan pembuatan database di MySQL melalui Phpmyadmin di `localhost/phpmyadmin`. **PASTIKAN NAMA DATABASE SESUAI DENGAN YANG ADA DALAM FILE** `.env`

7. Lakukan migrasi database dengan perintah
```bash
php artisan migrate
```

7. Jalankan project laravel anda
```bash
php artisan serve
```

8. Kunjungi project anda melalui browser
```
localhost:8000
```

## Documentation

1. [Bootstrap Documentation](https://getbootstrap.com/docs/3.3/css/)

2. [Laravel Documentation](https://laravel.com/docs/5.7)