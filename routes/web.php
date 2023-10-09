<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardControlle;
use App\Http\Controllers\Backend\StoreController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;


// Frontend Start
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
// Frontend End


// Backend Start
Route::get('/admin/dashboard', [DashboardControlle::class, 'index'])->name('admin.dashboard');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::get('/admin/category/manage', [CategoryController::class, 'manage'])->name('admin.category.manage');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::get('/admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
// Backend End

// Resourse Controller Start
Route::resource('stores', StoreController::class);
// Resourse Controller End
