<?php

use App\Http\Controllers\LandingController;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Users as AdminUsers;
use App\Livewire\Admin\Tags as AdminTags;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/users', AdminUsers::class)->name('users');
    Route::get('/tags', AdminTags::class)->name('tags');
});

require __DIR__.'/auth.php';
