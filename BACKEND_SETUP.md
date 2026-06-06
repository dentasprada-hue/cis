# Backend Setup Guide - Cahaya Interior Sejahtera

This guide covers setting up the backend for the Cahaya Interior Sejahtera website locally using Laragon.

## Prerequisites

- Laragon installed and running
- MySQL database configured in Laragon
- PHP 8.2+ installed
- Composer installed
- Node.js and npm installed

## Step 1: Configure Environment

Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```

Update the database configuration in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cis_db
DB_USERNAME=root
DB_PASSWORD=
```

**Note:** For Laragon, the default MySQL credentials are:
- Host: 127.0.0.1
- Port: 3306
- Username: root
- Password: (empty)

## Step 2: Create Database

Using Laragon:
1. Open Laragon
2. Click on **MySQL** → **Create Database**
3. Enter database name: `cis_db`
4. Click **Create**

Or using MySQL command line:

```bash
mysql -u root -e "CREATE DATABASE cis_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

## Step 3: Install Dependencies

Install PHP dependencies:

```bash
composer install
```

Install Node.js dependencies:

```bash
npm install
```

Build frontend assets:

```bash
npm run build
```

## Step 4: Generate Application Key

```bash
php artisan key:generate
```

## Step 5: Run Database Migrations

```bash
php artisan migrate
```

This will create the following tables:
- `users` - Admin users for Filament
- `projects` - Project portfolio data
- `failed_jobs` - Failed queue jobs
- `migrations` - Migration tracking
- `password_reset_tokens` - Password reset tokens
- `sessions` - Session storage
- `cache` - Cache storage
- `jobs` - Queue jobs

## Step 6: Seed Database

Run the database seeder to create:
- Admin user for Filament access
- Sample projects for testing

```bash
php artisan db:seed
```

**Admin Credentials:**
- Email: `admin@cahayainterior.com`
- Password: `password`

**Sample Projects Created:**
1. The Glass Pavilion Estate (Featured)
2. The Serene Penthouse (Featured)
3. Villa Lumina (Featured)
4. Aura Executive Suites
5. Kemang Residence
6. The Luminary Hotel
7. Menteng Heritage
8. Nexus Tech HQ

## Step 7: Create Storage Link

Create symbolic link for public file storage:

```bash
php artisan storage:link
```

This allows uploaded images to be accessible via the web.

## Step 8: Clear and Cache

Clear all caches:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

Cache configuration for production:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Step 9: Start Development Server

Start Laravel development server:

```bash
php artisan serve
```

The application will be available at: `http://localhost:8000`

## Step 10: Access Filament Admin Panel

Access the Filament admin panel at:

```
http://localhost:8000/admin
```

Login with the admin credentials:
- Email: `admin@cahayainterior.com`
- Password: `password`

## Backend Flow Overview

### 1. Project Management (Filament Admin)

**Create Project:**
1. Login to `/admin`
2. Navigate to **Projects** → **Create Project**
3. Fill in project information:
   - Title (auto-generates slug)
   - Short description (for listing pages)
   - Description (detailed content with rich editor)
   - Category (Residential, Commercial, Office, Hospitality)
   - Location
   - Year
   - Scale
   - Featured toggle (highlights on home page)
4. Upload images:
   - Featured image (cover image)
   - Gallery images (multiple, reorderable)
5. Configure SEO:
   - SEO title (optional, defaults to project title)
   - SEO description (optional, defaults to short description)
6. Click **Save**

**Edit Project:**
1. Navigate to **Projects**
2. Click on project row
3. Make changes
4. Click **Save**

**Delete Project:**
1. Navigate to **Projects**
2. Click delete icon on project row
3. Confirm deletion

### 2. Public Pages Data Flow

**Home Page:**
- Fetches 2 featured projects from database
- Displays in "Selected Works" section

**Projects Page:**
- Fetches all projects from database
- Supports category filtering via URL query parameter
- Displays featured project prominently
- Shows masonry grid of all projects

**Project Detail Page:**
- Fetches single project by slug
- Displays full project information
- Shows gallery images
- Displays related projects (same category)

**Contact Form:**
- Validates form input
- Returns success message
- (Email sending requires additional mail configuration)

### 3. SEO Endpoints

**Sitemap:**
- URL: `/sitemap.xml`
- Dynamically generates XML sitemap with all projects
- Auto-updates when projects change

**Robots.txt:**
- URL: `/robots.txt`
- Dynamically generated
- Includes sitemap reference

## Database Schema

### Projects Table

| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| title | string | Project title |
| slug | string | URL-friendly identifier (unique) |
| short_description | text | Brief summary |
| description | longText | Full content |
| featured_image | text | Cover image path |
| gallery_images | json | Array of gallery image paths |
| category | string | Project category |
| location | string | Project location |
| year | integer | Project year |
| scale | string | Project scale (e.g., "1,200 sqm") |
| is_featured | boolean | Featured flag |
| seo_title | string | SEO meta title |
| seo_description | text | SEO meta description |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Update timestamp |

## Image Storage

Images are stored in:
- Featured images: `storage/app/public/projects/featured/`
- Gallery images: `storage/app/public/projects/gallery/`

Accessible via:
- `http://localhost:8000/storage/projects/featured/`
- `http://localhost:8000/storage/projects/gallery/`

## Troubleshooting

### Database Connection Error

**Error:** SQLSTATE[HY000] [2002] Connection refused

**Solution:**
1. Ensure Laragon MySQL is running
2. Verify database credentials in `.env`
3. Check database name exists

### Migration Error

**Error:** SQLSTATE[HY000] General error: database already exists

**Solution:**
```bash
php artisan migrate:fresh
```

### Storage Link Error

**Error:** The "public/storage" directory already exists

**Solution:**
```bash
rm public/storage
php artisan storage:link
```

### Admin Login Failed

**Solution:**
1. Run seeder again: `php artisan db:seed`
2. Verify credentials: `admin@cahayainterior.com` / `password`
3. Check if user exists in database

### Images Not Displaying

**Solution:**
1. Ensure storage link exists: `php artisan storage:link`
2. Check file permissions on `storage/app/public`
3. Verify `APP_URL` in `.env` matches your local URL

## Development Workflow

### Adding New Project

1. Via Filament Admin:
   - Login to `/admin`
   - Go to Projects → Create
   - Fill in all fields
   - Upload images
   - Save

2. Via Database Seeder (for development):
   - Add project data to `DatabaseSeeder.php`
   - Run: `php artisan db:seed --class=DatabaseSeeder`

### Updating Project Data

1. Via Filament Admin:
   - Login to `/admin`
   - Go to Projects
   - Click on project
   - Edit fields
   - Save

2. Via Tinker:
   ```bash
   php artisan tinker
   >>> $project = App\Models\Project::find(1);
   >>> $project->title = 'New Title';
   >>> $project->save();
   ```

### Clearing Caches

After any configuration changes:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

## Production Considerations

Before deploying to production:

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Update database credentials for production
4. Run `php artisan config:cache`
5. Run `php artisan route:cache`
6. Run `php artisan view:cache`
7. Ensure storage link is created
8. Set proper file permissions
9. Configure SSL certificate
10. Update Google Analytics and Search Console IDs

## Security Notes

- Change default admin password immediately after first login
- Use strong database passwords in production
- Keep `APP_DEBUG=false` in production
- Regularly update dependencies
- Use HTTPS in production
- Implement rate limiting for contact form
- Regular database backups

## Support

For issues:
- Laravel Documentation: https://laravel.com/docs
- Filament Documentation: https://filamentphp.com/docs
- Laragon Documentation: https://laragon.org/docs
