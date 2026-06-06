# Production Deployment Guide - Cahaya Interior Sejahtera Website

This guide covers deploying the Laravel 12 website to Hostinger Premium Shared Hosting.

## Prerequisites

- Hostinger Premium Shared Hosting account
- SSH access enabled
- Domain name configured
- MySQL database created
- PHP 8.2+ (Laravel 12 requirement)

## Local Preparation

### 1. Update Environment Variables

Update `.env` file for production:

```env
APP_NAME="Cahaya Interior Sejahtera"
APP_ENV=production
APP_KEY=your-app-key
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=your-hostinger-db-host
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-database-username
DB_PASSWORD=your-database-password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=public
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

# Filament Admin
FILAMENT_FILESYSTEM_DISK=public

# Google Services
GOOGLE_ANALYTICS_ID=your-ga4-id
GOOGLE_SEARCH_CONSOLE_VERIFICATION=your-verification-code
```

### 2. Install Dependencies

```bash
composer install --optimize-autoloader --no-dev
npm install
npm run build
```

### 3. Clear and Cache

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 4. Create Storage Link

```bash
php artisan storage:link
```

### 5. Optimize Application

```bash
php artisan optimize
```

## Deployment Steps

### 1. Upload Files to Hostinger

Using FileZilla or Hostinger File Manager:

- Upload all files EXCEPT:
  - `.env` (create new on server)
  - `node_modules/`
  - `vendor/`
  - `.git/`
  - `storage/` (except keep structure)
  - `.idea/`

### 2. Set File Permissions

SSH into your Hostinger account:

```bash
# Navigate to public_html
cd public_html

# Set proper permissions
chmod 755 .
chmod -R 755 app/
chmod -R 755 bootstrap/
chmod -R 755 config/
chmod -R 755 database/
chmod -R 755 public/
chmod -R 755 resources/
chmod -R 755 routes/
chmod -R 755 storage/
chmod -R 755 vendor/

# Make storage and cache writable
chmod -R 777 storage/
chmod -R 777 bootstrap/cache/
```

### 3. Create .env on Server

Create `.env` file in the root directory with production values from local preparation.

### 4. Install Composer Dependencies

SSH into Hostinger:

```bash
cd public_html
composer install --optimize-autoloader --no-dev
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations

```bash
php artisan migrate --force
```

### 7. Create Storage Link

```bash
php artisan storage:link
```

### 8. Clear and Cache

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 9. Configure Hostinger PHP Settings

Via Hostinger hPanel:

1. Go to **Hosting** → **Manage**
2. Click **Config** → **PHP Options**
3. Set:
   - PHP Version: 8.2 or higher
   - memory_limit: 256M
   - max_execution_time: 300
   - upload_max_filesize: 64M
   - post_max_size: 64M
   - allow_url_fopen: On
   - file_uploads: On

### 10. Configure .htaccess for Public Directory

Ensure `.htaccess` in `public/` directory:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

# Security Headers
<IfModule mod_headers.c>
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-Content-Type-Options "nosniff"
    Header set X-XSS-Protection "1; mode=block"
    Header set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# Gzip Compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>

# Browser Caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

## Post-Deployment Checklist

### 1. Verify Website Access

- Visit your domain
- Check all pages load correctly
- Test navigation links
- Verify images display properly

### 2. Test Filament Admin

- Access `/admin`
- Login with admin credentials
- Test project CRUD operations
- Verify image uploads work

### 3. Test Contact Form

- Submit contact form
- Verify success message displays
- Check email delivery (if configured)

### 4. SEO Verification

- Verify robots.txt: `https://yourdomain.com/robots.txt`
- Verify sitemap.xml: `https://yourdomain.com/sitemap.xml`
- Check meta tags on key pages
- Validate JSON-LD structured data

### 5. Performance Optimization

- Enable Cloudflare CDN (optional)
- Configure image lazy loading
- Test Core Web Vitals
- Verify Google Analytics tracking

### 6. Security Hardening

- Ensure `APP_DEBUG=false` in production
- Verify SSL certificate is active
- Set up automatic SSL renewal
- Configure firewall rules (if available)
- Regular backup schedule

## Maintenance

### Regular Backups

```bash
# Database backup
php artisan db:backup

# Files backup via Hostinger backup tool
```

### Update Dependencies

```bash
composer update
npm update
php artisan optimize
```

### Monitor Logs

```bash
tail -f storage/logs/laravel.log
```

## Troubleshooting

### 500 Internal Server Error

- Check `.env` file exists and has correct values
- Verify file permissions
- Check PHP error logs in Hostinger hPanel
- Ensure storage link exists

### Images Not Displaying

- Verify storage link: `php artisan storage:link`
- Check file permissions on `storage/app/public`
- Verify `APP_URL` in `.env` matches domain

### Database Connection Error

- Verify database credentials in `.env`
- Check database exists in Hostinger MySQL
- Ensure database user has proper permissions
- Test connection via Hostinger phpMyAdmin

### Filament Admin Not Accessible

- Clear cache: `php artisan cache:clear`
- Verify admin user exists in database
- Check `FILAMENT_FILESYSTEM_DISK` in `.env`

## SSL Configuration

Hostinger provides free SSL via Let's Encrypt:

1. Go to **Hosting** → **Manage**
2. Click **SSL**
3. Enable **Auto SSL**
4. Force HTTPS redirect in `.htaccess`:

```apache
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

## Support Resources

- Laravel Documentation: https://laravel.com/docs
- Filament Documentation: https://filamentphp.com/docs
- Hostinger Knowledge Base: https://support.hostinger.com
- Google Search Console: https://search.google.com/search-console
- Google Analytics: https://analytics.google.com

## Emergency Rollback

If deployment fails:

1. Restore from Hostinger backup
2. Revert to previous `.env` configuration
3. Run `php artisan migrate:rollback --force`
4. Clear all caches

## Contact

For deployment issues, contact:
- Hostinger Support: via hPanel
- Laravel Community: https://laravel.io
