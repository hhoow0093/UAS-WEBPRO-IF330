# Seadex - Corporate Profile & E-Commerce Platform

![Laravel](https://img.shields.io/badge/Laravel-v11-FF2D20?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-v8.2-777BB4?style=flat&logo=php)
![MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?style=flat&logo=mysql)
![Livewire](https://img.shields.io/badge/Frontend-Livewire-FB70A9?style=flat&logo=livewire)
![Bootstrap](https://img.shields.io/badge/Styling-Bootstrap%205-7952B3?style=flat&logo=bootstrap)

## 📺 Project Demo
> *[Insert Link to YouTube Video, Screenshots, or GIF Walkthrough Here]*
>
> **Status:** 🚧 Prototype

## Description
**Seadex** is a full-stack web application designed to serve as both a corporate profile and a product management system. Built on **Laravel 11**, it demonstrates a robust implementation of backend logic for e-commerce workflows.

The platform bridges the gap between informational content and inventory management, featuring a secure **Role-Based Access Control (RBAC)** system. This architecture allows administrators to manage the product catalog (CRUD) while regular users can browse products and access corporate services.

**Key Capabilities:**
* **Dynamic Catalog:** Real-time product listing with category filtering.
* **Secure Authentication:** User registration/login with hashed passwords (Bcrypt).
* **Admin Dashboard:** Restricted area for inventory control and category management.
* **Relational Data:** Optimized MySQL schema handling Many-to-Many relationships between users and products.

## Architecture & Tech Stack

**Backend:**
* **Framework:** Laravel 11.9
* **Language:** PHP 8.2
* **Database:** MySQL 8.0
* **ORM:** Eloquent (handling relationships like `BelongsTo`, `HasMany`)

**Frontend:**
* **Templating:** Blade Engine
* **Interactivity:** Laravel Livewire v3.5
* **Styling:** Bootstrap 5

**Security:**
* **RBAC:** Custom Middleware (`Auth`, `User` roles) to protect `/adminpage` routes.
* **CSRF Protection:** Native Laravel token verification for all forms.

## Database Schema
The application uses a relational database structure designed for scalability:

* **Users:** Stores credentials and assigns roles (`admin` vs `user`).
* **Products:** Main inventory table linked to Categories.
* **Categories:** Categorization logic for products.
* **Product_User (Pivot):** Handles transactions and linking Users to Products with Quantity (`qty`).

## Installation

To run this prototype locally, follow these steps:

### 1. Prerequisites
Ensure you have **PHP >= 8.2**, **Composer**, and **MySQL** installed.

### 2. Clone the Repository
```bash
git clone [https://github.com/YourUsername/seadex.git](https://github.com/YourUsername/seadex.git)
cd seadex
```

### 3. Install Dependencies
```bash
composer install
npm install
```

### 4. Environment Setup
Duplicate the example environment file and configure your database:
```bash
cp .env.example .env
```
Open `.env` and update your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seadex
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate App Key & Migrate
```bash
php artisan key:generate
php artisan migrate:fresh --seed
```

### 6. Run the Application
```bash
npm run build
php artisan serve
```
Visit `http://localhost:8000` in your browser.

## Key Features & Routes

| Feature | Route | Description | Access |
| :--- | :--- | :--- | :--- |
| **Home** | `/seadex/home` | Landing page. | Public |
| **Auth** | `/seadex/login` | Secure User Login. | Public |
| **Catalog** | `/seadex/products` | Browse all products. | Public |
| **Admin Panel** | `/adminpage` | Dashboard for admins. | **Admin Only** |
| **Product Mgmt** | `/seadex/products/create` | Add new inventory. | **Admin Only** |

## Contributing
This is a portfolio prototype and is not open for public contribution at this time.