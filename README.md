<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About app
Student CRUD api using Laravel 9


## How to run it locally
 1) Create a new database locally named `laravel-9-crud-social-gardern`
 
 2) clone the [repository](https://github.com/nishchaypandya/laravel-9-crud-app-social-garden-test.git) to your local machine :

```bash
$ git clone https://github.com/nishchaypandya/laravel-9-crud-app-social-garden-test.git
$ cd laravel-9-crud-app-social-garden-testdp_concept_backend
```

3) Rename .env.example file to .env inside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env ).
- Need to fill some details in .env file like AWS details Google Login Details

4) Install the packages
Install the `packages` described in the `package.json` and verify that it works:
```bash
$ composer install
```

5) Run this command for Generate new app key
```bash
$ php artisan key:generate
```

6) Run this command for Database Migration
```bash
$ php artisan migrate
```

7) Run this command for seeders

```bash
$ php artisan db:seed
```

8) Run project

```bash
$ php artisan serve
```


Developer Info 
Name :- Nishchay Pandya 
