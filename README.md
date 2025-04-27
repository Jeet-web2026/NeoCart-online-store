# 🛒 E-Commerce Web Application ( NeoCart )

A modern, scalable, and maintainable E-Commerce Web Application built with **Laravel** and **Livewire**, following the latest **Laravel best practices**.  
The project is designed for high performance, clean architecture, and smooth user experience.

## 🚀 Features

- User Registration, Login, and Social Authentication
- Product Catalog with Categories, Tags, and Attributes
- Dynamic Search and Filters (Livewire-powered)
- Cart Management (Add, Update, Remove Products)
- Secure Checkout with Order Summary
- Payment Gateway Integration (Stripe / PayPal)
- User Profile Management
- Order Tracking and History
- Admin Panel for Product, Category, and Order Management
- SEO Optimized Product Pages
- Mobile Responsive and PWA Ready
- Modular, Service-based Architecture
- Real-time Notifications (Order Status, etc.)

## 🛠️ Tech Stack

- **Laravel** 10+
- **Livewire** 3+
- **Blade** Templating
- **Bootstrap 5**
- **Laravel Sanctum** for authentication (if API needed)
- **Spatie Laravel Packages** (Permissions, Media Library)
- **MySQL** Database
- **PayPal** for Payments

## 🧱 Project Structure (Best Practices Followed)

- **Domain-driven folder structure** (`app/Models`, `app/Services`, `app/Http/Livewire`, `app/Repositories`)
- **Service Classes** for business logic
- **Repository Pattern** for database operations
- **Form Requests** for Validation
- **Resource Classes** for API responses
- **Policy & Gates** for Authorization
- **Event-Listener Pattern** for important actions (e.g., Order Placed)
- **Livewire Components** for dynamic UI without heavy JavaScript
- **Jobs & Queues** for background tasks (like sending emails)

## ⚙️ Installation Guide

```bash
# 1. Clone the repository
[git clone https://github.com/Jeet-web2026/NeoCart-online-store.git]

# 2. Navigate to project directory
cd NeoCart-online-store

# 3. Install PHP dependencies
composer install

# 4. Install JavaScript dependencies
npm install && npm run dev

# 5. Copy and set up environment file
cp .env.example .env

# 6. Set your environment variables in `.env`
APP_NAME="E-Commerce"
APP_URL=http://localhost
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

# 7. Generate application key
php artisan key:generate

# 8. Run migrations and seeders
php artisan migrate --seed

# 9. (Optional) Queue worker for background jobs
php artisan queue:work

# 10. Start the development server
php artisan serve
```

## 🧪 Running Tests

```bash
php artisan test
```

## 🧹 Code Quality Tools

- **PHPStan** (Static analysis)
- **Pint** (Laravel's Code Formatter)
- **Larastan** (for deeper static analysis)

```bash
# Static code analysis
./vendor/bin/phpstan analyse

# Code formatting
./vendor/bin/pint
```

## 📁 Deployment Steps

- Configure your web server (e.g., Nginx) to point to the `public/` directory
- Set appropriate file permissions
- Run migrations and seeders on production
- Set up supervisor for queue workers
- Enable cache optimizations:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🙌 Contributing

Contributions are welcome!  
Please fork the repository, create a new branch, and submit a pull request.

## 📜 License

This project is open-sourced under the **MIT License**.
