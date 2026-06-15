# Products API — Laravel 11

RESTful API for product management. Built with Laravel 11, MySQL, and full CRUD support.

## Requirements

- PHP 8.2+
- Composer
- MySQL 8+

## Setup

```bash
# 1. Install dependencies
composer install

# 2. Copy env and configure your DB credentials
cp .env.example .env
# Edit DB_DATABASE, DB_USERNAME, DB_PASSWORD, FRONTEND_URL

# 3. Generate app key
php artisan key:generate

# 4. Run migrations + seed
php artisan migrate --seed

# 5. Start dev server
php artisan serve
```

## API Endpoints

| Method | Endpoint              | Description          |
|--------|-----------------------|----------------------|
| GET    | /api/products         | List all products    |
| POST   | /api/products         | Create product       |
| GET    | /api/products/{id}    | Get product          |
| PUT    | /api/products/{id}    | Update product       |
| DELETE | /api/products/{id}    | Delete product       |
| GET    | /api/health           | Health check         |

### Query Parameters (GET /api/products)

| Param      | Description                    |
|------------|--------------------------------|
| search     | Search by name or SKU          |
| category   | Filter by category             |
| is_active  | Filter by active status        |

### Product Payload

```json
{
  "name": "Wireless Headphones",
  "description": "Premium headphones",
  "price": 199.99,
  "stock": 50,
  "category": "Electronics",
  "sku": "ELEC-001",
  "is_active": true
}
```

## Deploy (Production)

```bash
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan migrate --force
```

Point your web server (Nginx/Apache) to `/public`.
