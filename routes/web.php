<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
// admin
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// --- admin ----
Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/save', [AdminController::class, 'insert'])->middleware(['auth', 'verified'])->name('admin.insert');
Route::get('/admin/edit/{id_blog}', [AdminController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.edit');
Route::put('/admin/update/{id_blog}', [AdminController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.update');
Route::delete('/admin/delete/{id_blog}', [AdminController::class, 'delete'])->middleware(['auth', 'verified'])->name('admin.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/detail/{slug}', [BlogController::class,'detail'])->name('blog.Blogdetail');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

require __DIR__.'/auth.php';
