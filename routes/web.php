<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\YazilarController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\MenulerController;
use App\Http\Controllers\AdaylarController;

Route::get('/', [BannerController::class, 'showHome'])->name('home');

Route::get('/admin/giris', [AdminUserController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/giris', [AdminUserController::class, 'login'])->name('admin.login.post');

Route::middleware(['auth.admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminUserController::class, 'showDashboard'])->name('admin.dashboard');
    Route::get('/admin/kullanicilar/adminler', [AdminUserController::class, 'showAdminler'])->name('admin.kullanicilar.adminler');
    Route::get('/admin/kullanicilar/adminekle', [AdminUserController::class, 'showAdminEkleForm'])->name('admin.kullanicilar.adminekle');
    Route::post('/admin/kullanicilar/adminekle', [AdminUserController::class, 'register'])->name('admin.kullanicilar.adminekle.post');
    Route::get('/admin/kullanicilar/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.kullanicilar.edit');
    Route::post('/admin/kullanicilar/update/{id}', [AdminUserController::class, 'update'])->name('admin.kullanicilar.update');
    Route::delete('/admin/kullanicilar/delete/{id}', [AdminUserController::class, 'destroy'])->name('admin.kullanicilar.delete');
    
    Route::get('/admin/yazilar/yazilar', [YazilarController::class, 'showYazilar'])->name('admin.yazilar.yazilar');
    Route::post('/admin/yazilar/yaziekle', [YazilarController::class, 'store'])->name('admin.yazilar.yaziekle');
    Route::get('/admin/yazilar/yaziekle', [YazilarController::class, 'showYaziEkleForm'])->name('admin.yazilar.yaziekle');
    Route::get('/admin/yazilar/edit/{id}', [YazilarController::class, 'edit'])->name('admin.yazilar.edit');
    Route::post('/admin/yazilar/update/{id}', [YazilarController::class, 'update'])->name('admin.yazilar.update');
    Route::delete('/admin/yazilar/delete/{id}', [YazilarController::class, 'destroy'])->name('admin.yazilar.delete');

    Route::get('/admin/bannerlar/bannerlar', [BannerController::class, 'showBannerlar'])->name('admin.bannerlar.bannerlar');
    Route::post('/admin/bannerlar/bannerekle', [BannerController::class, 'store'])->name('admin.bannerlar.bannerekle');
    Route::get('/admin/bannerlar/bannerekle', [BannerController::class, 'showBannerEkleForm'])->name('admin.bannerlar.bannerekle');
    Route::get('/admin/bannerlar/edit/{id}', [BannerController::class, 'edit'])->name('admin.bannerlar.edit');
    Route::post('/admin/bannerlar/update/{id}', [BannerController::class, 'update'])->name('admin.bannerlar.update');
    Route::delete('/admin/bannerlar/delete/{id}', [BannerController::class, 'destroy'])->name('admin.bannerlar.delete');

    Route::get('/admin/menuler/menuler', [MenulerController::class, 'showMenuler'])->name('admin.menuler.menuler');
    Route::post('/admin/menuler/menuekle', [MenulerController::class, 'store'])->name('admin.menuler.menuekle');
    Route::get('/admin/menuler/menuekle', [MenulerController::class, 'showMenuEkleForm'])->name('admin.menuler.menuekle');
    Route::get('/admin/menuler/edit/{id}', [MenulerController::class, 'edit'])->name('admin.menuler.edit');
    Route::post('/admin/menuler/update/{id}', [MenulerController::class, 'update'])->name('admin.menuler.update');
    Route::delete('/admin/menuler/delete/{id}', [MenulerController::class, 'destroy'])->name('admin.menuler.delete');

});
