<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\MasyarakatController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified',])->name('dashboard');

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::get('/admin/pengaduan', [PengaduanController::class, 'index'])->name('admin.pengaduan');
//     Route::get('/admin/pengaduan/detail/{id}', [PengaduanController::class, 'show'])->name('admin.pengaduan.detail');
    
    
//     Route::get('/akunpetugas', [PetugasController::class, 'index'])->name('admin.petugas');
//     Route::get('/tambah-petugas', [PetugasController::class, 'create'])->name('admin.tambah-petugas');
//     Route::post('/tambah-petugas-store', [PetugasController::class, 'store'])->name('admin.tambah-petugas-store');

//     Route::get('/tanggapan/{id}', [TanggapanController::class, 'show'])->name('tanggapan');
//     Route::post('/tanggapan-store', [TanggapanController::class, 'store'])->name('tanggapan-store');

//     Route::get('/cetak_pdf/{id}', [AdminController::class, 'pdf'])->name('cetak-pdf');
//     Route::get('/laporan', [AdminController::class, 'laporan'])->name('all-laporan');
//     Route::get('/cetak_laporan', [AdminController::class, 'cetak_laporan'])->name('cetak-all-laporan');
// });

// Route::group(['middleware' => ['auth', 'MasyarakatMiddleware']], function () {
//     Route::get('/dashboard-masyarakat', [MasyarakatController::class, 'create'])->name('dashboard-masyarakat');
//     Route::get('/pengaduan', [MasyarakatController::class, 'index'])->name('pengaduan-show');
//     Route::post('/dashboard-masyarakat-store', [MasyarakatController::class, 'store'])->name('dashboard-masyarakat-store');
//     Route::get('/detail-pengaduan/{id}', [MasyarakatController::class, 'show'])->name('detail-pengaduan');
//     Route::delete('/pengaduan-delete/{id}', [MasyarakatController::class, 'destroy'])->name('pengaduan-destroy');
// });


require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){
    // Route::resource('admin.pengaduan', PengaduanController::class);
    Route::controller(PengaduanController::class)->group(function(){
        Route::get('/admin/pengaduan', 'index')->name('admin.pengaduan')->middleware('can:read role');
    });
});
