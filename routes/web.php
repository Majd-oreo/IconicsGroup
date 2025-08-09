<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ApplicationAdminsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/about', function () {
    return view('Admin.about_us.index
    ');
});
Route::resource('admin/application', ApplicationAdminsController::class)->names('admin.application');
Route::resource('admin/service', ServiceAdminController::class)->names('admin.service');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
