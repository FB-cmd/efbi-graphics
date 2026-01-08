# EFBI Graphics Deployment Guide

## Quick Deployment Options

### Option 1: Shared Hosting (Most Common)

Perfect for services like OVH, Hostinger, GoDaddy, etc.

1. **Prepare files:**

    ```bash
    ./deploy.sh
    ```

    Select option 3 (Manual deployment)

2. **Upload via FTP:**

    - Use FileZilla, Cyberduck, or your hosting provider's file manager
    - Upload all files to your web root directory (usually `public_html/` or `www/`)
    - Don't upload: `.git/`, `deploy.sh`, `backups/`, `.DS_Store`

3. **Configure:**
    - Copy `.env.example` to `.env` and update with your details
    - Ensure PHP 7.4+ is enabled on your hosting
    - Make sure `composer` dependencies are uploaded

### Option 2: VPS/Dedicated Server

If you have SSH access to your server:

1. **Deploy via SSH:**
    ```bash
    ./deploy.sh
    ```
    Select option 2 (SSH/rsync)

### Option 3: Free Hosting Alternatives

#### Netlify (Static conversion required)

Since your site uses PHP, you'd need to convert it to static HTML first.

#### Heroku (PHP support)

1. Create a `Procfile`:

    ```
    web: vendor/bin/heroku-php-apache2
    ```

2. Deploy:
    ```bash
    heroku create your-app-name
    git push heroku main
    ```

## Pre-Deployment Checklist

-   [ ] Test your site locally: `php -S localhost:8000`
-   [ ] Update contact forms with production email settings
-   [ ] Configure `.env` file with production values
-   [ ] Ensure all assets (images, CSS, JS) load correctly
-   [ ] Test contact form functionality
-   [ ] Check mobile responsiveness
-   [ ] Verify SEO meta tags and descriptions

## Post-Deployment Tasks

-   [ ] Set up SSL certificate (Let's Encrypt or through your hosting provider)
-   [ ] Configure DNS records to point to your hosting
-   [ ] Set up Google Analytics (if desired)
-   [ ] Submit sitemap to Google Search Console
-   [ ] Test all pages and forms
-   [ ] Set up backups

## Hosting Recommendations

### Budget-Friendly Options:

-   **Hostinger** - €1.99/month, great for beginners
-   **OVH** - €2.99/month, European provider
-   **Namecheap** - $2.88/month, includes domain

### Professional Options:

-   **DigitalOcean** - $5/month VPS
-   **Linode** - $5/month VPS
-   **AWS/Google Cloud** - Pay as you use

## Need Help?

If you encounter issues:

1. Check your hosting provider's PHP error logs
2. Ensure PHP version is 7.4 or higher
3. Verify file permissions (usually 644 for files, 755 for directories)
4. Make sure `.htaccess` is properly uploaded and working
