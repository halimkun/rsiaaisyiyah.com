<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PoliKlinikController;

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

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfileController::class, 'index'])->name('profil');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');
Route::get('/informasi/rs', [InformasiController::class, 'index'])->name('info.rs');
Route::get('/informasi/karir', [KarirController::class, 'index'])->name('info.karir');
Route::get('/posts', [InformasiController::class, 'index'])->name('posts');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// grop for admin
Route::middleware('auth')->prefix('admin')->group(function ($router) {
    $router->get('/', DashboardController::class)->name('admin.home');
    $router->get('/dashboard', DashboardController::class)->name('dashboard','admin.dashboard');
    $router->get('/layanan', [LayananController::class])->name('admin.layanan');

    $router->prefix('karir')->group(function ($router) {
        $router->get('/', [KarirController::class, 'admin'])->name('admin.karir');
        $router->post('/store', [KarirController::class, 'store'])->name('admin.karir.store');
        $router->post('/update', [KarirController::class, 'update'])->name('admin.karir.update');
        $router->post('/delete', [KarirController::class, 'delete'])->name('admin.karir.delete');
    
        $router->get('/get', [KarirController::class, 'getKarir'])->name('admin.get.karir');
    });

    $router->prefix('settings')->group(function ($router) {
        $router->get('/', [SettingsController::class, 'index'])->name('admin.settings');

        $router->post('/store', [SettingsController::class, 'store'])->name('admin.settings.store');
        $router->post('/carousel/store', [CarouselController::class, 'store'])->name('admin.settings.carousel.store');
    });
    
    // $router->get('/setting/section', [SectionController::class, 'index'])->name('admin.sections');

    // Route::get('jadwal', [JadwalController::class, 'index']);
    // Route::get('informasi', [InformasiController::class, 'index']);
    // Route::get('gallery', [GalleryController::class, 'index']);
    // Route::get('kontak', [KontakController::class, 'index']);

    // setting routes
    // $router->post('/setting/poli/title', [PoliKlinikController::class, 'updateSectionTitle'])->name('admin.sections.poli.title');
    // $router->post('/setting/poli/store', [PoliKlinikController::class, 'store'])->name('admin.sections.poli.store');
    // $router->post('/setting/poli/update', [PoliKlinikController::class, 'update'])->name('admin.sections.poli.update');
    // $router->post('/setting/poli/delete', [PoliKlinikController::class, 'delete'])->name('admin.sections.poli.delete');
    
    // $router->post('/setting/fasilitas/title', [FasilitasController::class, 'updateSectionTitle'])->name('admin.sections.fasilitas.title');
    // $router->post('/setting/fasilitas/store', [FasilitasController::class, 'store'])->name('admin.sections.fasilitas.store');

    // $router->post('/setting/dokter/title', [DokterController::class, 'updateSectionTitle'])->name('admin.sections.dokter.title');
    // $router->post('/setting/artikel/title', [ArtikelController::class, 'updateSectionTitle'])->name('admin.sections.artikel.title');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
