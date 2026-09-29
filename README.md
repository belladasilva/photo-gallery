# Photo Gallery

A small PHP and MySQL project I built to practice image uploads,
database integration, and displaying stored images in a gallery.

## What I worked with

- PHP
- MySQL
- HTML
- CSS

## Features

- Upload images
- Store image information in MySQL
- Display uploaded images in a gallery
- Basic file validation

## Running locally

Install standalone PHP 8.4 and enable the `fileinfo`, `gd`, and `pdo_mysql`
extensions. Start a local MySQL or MariaDB server on port 3306. Import
`sql/gallery.sql` once to create the `photo_gallery` database and `images`
table. Create the `photo_gallery_app` user with `SELECT` and `INSERT` access to
that database. Keep its password outside the repository and provide it through
the `PHOTO_GALLERY_DB_PASSWORD` environment variable.

On the configured Windows machine, start the app from the project directory:

```powershell
$securePassword = Import-Clixml (Join-Path $env:APPDATA 'PhotoGallery\app-password.clixml')
$env:PHOTO_GALLERY_DB_PASSWORD = [System.Net.NetworkCredential]::new('', $securePassword).Password
php -S 127.0.0.1:8000 -t .
```

Open `http://127.0.0.1:8000/`. The `uploads` and `resized` directories must be
writable for image uploads.

## About

This is an older learning project and is kept here as part of my
development journey.
