<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# MCR Consult - User Management System

A simple User Management System built with **Laravel 13**, **MySQL**, **Blade**, and **Bootstrap 5**.

Developed as a technical test project for **MCR Consult**, focusing on authentication, CRUD operations, validation, and basic security.

## Tech Stack

* PHP 8.2+
* Laravel 13
* MySQL
* Blade
* Bootstrap 5.3
* Eloquent ORM

## Features

* **Authentication** — Login / Logout using Laravel Auth
* **Middleware** — Protect admin pages with authentication middleware
* **Dashboard** — Simple admin dashboard
* **User Management**

  * View users
  * Add user
  * Edit user
  * Delete user
* **Validation** — Required fields, email format, unique email, password length
* **Password Security** — Passwords are hashed using Laravel Hash
* **CSRF Protection** — All forms protected with Laravel CSRF
* **Delete Protection** — Prevent deleting the currently logged-in user

## Main Routes

text
/login                  Login
/dashboard              Dashboard
/users                  User list
/users/create           Add user
/users/{user}/edit      Edit user


## Project Structure

text
app/
├── Http/
│   ├── Controllers/UserController.php
│   └── Middleware/AdminAuth.php
└── Models/User.php

resources/views/
├── layouts/app.blade.php
├── login.blade.php
├── dashboard.blade.php
└── users/
    ├── index.blade.php
    ├── create.blade.php
    └── edit.blade.php

routes/web.php


## Setup

### 1. Clone the project

bash
git clone https://github.com/smilecat101/testdev.git
cd REPOSITORY


### 2. Install dependencies

bash
composer install


### 3. Create `.env`

Copy `.env.example` to `.env`:

bash
cp .env.example .env


Windows PowerShell:

powershell
Copy-Item .env.example .env


### 4. Configure database

Update the database settings in `.env`:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password


### 5. Generate application key

bash
php artisan key:generate


### 6. Run database migration

bash
php artisan migrate


### 7. Create an admin user

Run:

bash
php artisan tinker


Then:

php
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
]);


### 8. Start the application

bash
php artisan serve


Open:

text
http://127.0.0.1:8000


Login with the account created in step 7.



## Authentication

Users are authenticated against the users database table.

Passwords are stored securely using Laravel password hashing.

---
