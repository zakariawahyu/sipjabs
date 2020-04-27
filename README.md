<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About SIPJABS

SIPJABS (Sistem Pengawakan Jabatan Struktural) adalah aplikasi berbasis web yang bertujuan untuk mengelola proses pencarian kandidat yang akan dicalonkan sebagai pemimpin, agar perusahaan memperoleh talent-talent yang memenuhi ketentuan yang sudah ditetapkan perusahaan dengan menerapkan penilaian yang lebih lengkap dan adil

## Installation
- Clone repository
```
$ git clone https://github.com/zakariawahyu/sipjabs.git
```
- Run in your terminal and cd on directory
```
$ composer install
$ php artisan key:generate
```
- Setup database connection in .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead  <--- your database name
DB_USERNAME=homestead
DB_PASSWORD=secret
```


- Migrate tables
```
$ php artisan migrate
```


- Seed with demo data
```
$ php artisan db:seed
```

## Data Account Demo

- Admin
```
username : zakariawahyu
password : admin
```

- User
```
username : elsajelista
password : user
```
```
username : githapsari
password : user
```




