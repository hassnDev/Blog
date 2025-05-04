# Blog
# Laravel Blog CRUD Project

A simple blog application built with Laravel featuring full CRUD (Create, Read, Update, Delete) functionality.

## 🚀 Features

- Create, view, edit, and delete blog posts
- Basic layout with Bootstrap styling
- Posts include title, description, author name, and creation date
- Clean and responsive UI
- Laravel 11.22.0 based application

## 🛠️ Requirements

- PHP >= 8.2.12
- Composer >=2.8.8
- Laravel >= 8.x
- MySQL or any other compatible database
- Node.js and NPM (optional, for frontend assets)

## 📦 Installation

1. **Clone the repository:**

    ```bash
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name
    Install dependencies:

2. Install dependencies:

      composer install

3. Copy the .env file and generate app key: 
cp .env.example .env
php artisan key:generate

4.Set up your database in .env:
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

5.Run migrations:
php artisan migrate

6.Serve the application:

php artisan serve

**Folder Structure**
routes/web.php — Web routes for the CRUD operations

app/Http/Controllers/PostController.php — Main logic for CRUD actions

resources/views/posts — Blade templates for displaying the views

**Author**
Name: Hassn
Email:hassn.ali.dev@gmail.com 


**License**
This project is open-source and available under the MIT license.
