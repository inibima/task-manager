<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\Report;

// Redirect root ke /admin
Route::get('/', fn() => redirect('/admin'));

// Filament admin panel sudah otomatis terdaftar di /admin via paket Filament
Route::middleware(['auth', 'verified'])
     ->prefix('admin')
     ->group(function () {
         // Jika akses /admin, langsung ke daftar Project
         Route::get('/', fn() => redirect()->route('filament.resources.projects.index'));

         // Custom Report Page
         Route::get('reports', Report::class)
              ->name('filament.pages.report');
     });
