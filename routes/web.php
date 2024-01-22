<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/data-tamu', [TamuController::class, 'create'])->name('data-tamu');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

    Route::post('/addlaporan', [LaporanController::class, 'add_laporan'])->name('add_laporan');
    Route::get('/add', [LaporanController::class, 'laporan_view'])->name('add_laporanview');;
    Route::get('/edit_laporan/{id}',[LaporanController::class,'edit_product']);
    Route::get('/delete_laporan/{id}',[LaporanController::class,'delete_product']);




});

Route::middleware(['auth','auth.guru'])->group(function () {
    Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru');
});

Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    // Route::get('/admin/guru', [App\Http\Controllers\AdminController::class, 'viewGuru'])->name('admin.guru');
    Route::post('/admin/guru', [App\Http\Controllers\AdminController::class, 'addGuru'])->name('admin.addGuru');
    Route::post('/admin/guru/update-guru', [App\Http\Controllers\AdminController::class, 'updateGuru'])->name('admin.updateGuru');
    Route::get('/admin/guru/{email}', [App\Http\Controllers\AdminController::class, 'deleteGuru'])->name('admin.deleteGuru');
});
