<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Livewire\AdminDashboard;

// Public Pages
Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio.php', [PageController::class, 'portfolio']);

Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/pricing.php', [PageController::class, 'pricing']);

Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services.php', [PageController::class, 'services']);

Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/faq.php', [PageController::class, 'faq']);

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/privacy.php', [PageController::class, 'privacy']);

Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/terms.php', [PageController::class, 'terms']);

Route::get('/cookies', [PageController::class, 'cookies'])->name('cookies');
Route::get('/cookies.php', [PageController::class, 'cookies']);

// Admin Livewire Component
Route::get('/admin', AdminDashboard::class)->name('admin');
Route::get('/admin.php', AdminDashboard::class);
