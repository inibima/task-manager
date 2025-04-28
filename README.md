# Task Manager Internal

## Deskripsi
App manajemen tugas (Laravel + Filament + Shield).

## Setup (VS Code)
1. Buka folder di VS Code  
2. Jalankan Task (⌘+Shift+B / Ctrl+Shift+B):  
   - Composer Install  
   - Artisan Migrate  
   - Artisan Serve  

## Instalasi Manual
1. `composer install`  
2. `cp .env.example .env` + atur DB  
3. `php artisan key:generate`  
4. `php artisan migrate`  
5. `php artisan serve`

## Akses
- **Admin**: full akses `/admin`  
- **Manager**: lihat laporan  
- **Staff**: update status tugas

## Dokumentasi
Lihat folder `dokumen/` untuk ERD, flowchart, dan detail fitur.
