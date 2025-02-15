<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisabilitasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\kebutuhanDifabelController;
use App\Http\Controllers\LayananKeperluanController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get-jenis-disabilitas', [DashboardController::class, 'getJenisDisabilitas']);
    Route::resource('/disabilitas', DisabilitasController::class);
    Route::resource('/kebutuhan-difabel', kebutuhanDifabelController::class);
    Route::get('/data-disabilitas', [DisabilitasController::class, 'getView'])->name('disabilitas.view');
    Route::get('/difabel/export', [DisabilitasController::class, 'exportExcel'])->name('difabel.exportExcel');
    Route::get('/difabel/export-pdf', [DisabilitasController::class, 'exportPdf'])->name('difabel.exportPdf');
    Route::get('/logout', [AuthController::class, 'logout']);
    
    // Administrator
    Route::middleware('administrator')->group(function () {
        Route::resource('/layanan-keperluan', LayananKeperluanController::class)->name('index', 'layanan-keperluan');
        Route::put('/update-status-keperluan/{id}', [DisabilitasController::class, 'updateStatusKeperluan']);
        Route::resource('/manageuser', UserController::class)->name('index', 'manageuser');
    });
});

Route::get('/404', function () {
    return view('404');
});
