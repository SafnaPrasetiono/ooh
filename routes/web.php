<?php

// Pages Routing Controller

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\bannerAdmin;
use App\Http\Controllers\admin\eventAdmin;
use App\Http\Controllers\admin\lokerAdmin;
use App\Http\Controllers\admin\mediaAdmin;
use App\Http\Controllers\admin\newsAdmin;
use App\Http\Controllers\admin\profileAdmin;
use App\Http\Controllers\admin\testimonialAdmin;
use App\Http\Controllers\auth\authAdmin;
use App\Http\Controllers\pages\eventController;
use App\Http\Controllers\pages\indexController;
use App\Http\Controllers\pages\lokerController;
use App\Http\Controllers\pages\mediaController;
use App\Http\Controllers\pages\serviceController;
use App\Http\Controllers\pages\trainingController;
// Admin Routing Controller

// User Routing Controller
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/beranda', [indexController::class, 'index'])->name('index');
Route::get('/beranda/galeri', [mediaController::class, 'gallery'])->name('gallery');
Route::get('/Tentang-kami', [indexController::class, 'aboutme'])->name('aboutme');
// loker Routing
Route::get('/beranda/loker', [lokerController::class, 'index'])->name('index.loker');
Route::get('/beranda/loker/{slug}', [lokerController::class, 'detail'])->name('loker.detail');
// Events Routing
Route::get('/beranda/event', [eventController::class, 'index'])->name('events');
Route::get('/beranda/event/{slug}', [eventController::class, 'detail'])->name('events.detail');
// Training Routing
Route::get('/beranda/pelatihan', [trainingController::class, 'index'])->name('training');
Route::get('/beranda/pelatihan/pendaftaran', [trainingController::class, 'register'])->name('training.register');
Route::post('/beranda/pelatihan/pendaftaran/simpan', [trainingController::class, 'registerPost'])->name('training.register.post');
// pelayanan Routing
Route::get('/beranda/pelayanan/nt-farmer', [serviceController::class, 'farmer'])->name('service.ntfarmer');
Route::get('/beranda/pelayanan/hospitality', [serviceController::class, 'hospitality'])->name('service.hospitality');


// router for admins
Route::get('/admin/login', [authAdmin::class, 'login'])->name('admin.login');
Route::post('/admin/login/store', [authAdmin::class, 'loginPost'])->name('admin.login.store');
Route::get('/admin/register', [authAdmin::class, 'register'])->name('admin.register');
Route::post('/admin/register/store', [authAdmin::class, 'registerPost'])->name('admin.register.store');
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', [adminController::class, 'index'])->name('admin.index');
    // profile routeing
    Route::get('/profile', [profileAdmin::class, 'index'])->name('admin.profile');
    // loker pages
    Route::get('/loker', [lokerAdmin::class, 'index'])->name('admin.loker');
    Route::get('/loker/create', [lokerAdmin::class, 'create'])->name('admin.loker.create');
    Route::post('/loker/create/store', [lokerAdmin::class, 'store'])->name('admin.loker.store');
    Route::get('/loker/detail/{id}', [lokerAdmin::class, 'show'])->name('admin.loker.detail');
    Route::get('/loker/edit/{id}', [lokerAdmin::class, 'edit'])->name('admin.loker.edit');
    Route::put('/loker/update/{id}', [lokerAdmin::class, 'update'])->name('admin.loker.update');
    Route::get('/loker/upload/editore', [lokerAdmin::class, 'editore'])->name('admin.loker.upload.editore');
    Route::get('/loker/pelamar/{id}', [lokerAdmin::class, 'proposalDetail'])->name('admin.loker.pelamar.detail');
    Route::post('/loker/pelamar/action/{id}', [lokerAdmin::class, 'proposalPost'])->name('admin.loker.pelamar.action');
    // Routing news
    Route::get('/news', [newsAdmin::class, 'index'])->name('admin.news');
    Route::get('/news/create', [newsAdmin::class, 'create'])->name('admin.news.create');
    Route::post('/news/create/store', [newsAdmin::class, 'store'])->name('admin.news.create.store');
    Route::get('/news/edit/{id}', [newsAdmin::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/update/{id}', [newsAdmin::class, 'update'])->name('admin.news.update');
    Route::get('/news/upload/editore', [newsAdmin::class, 'editor'])->name('admin.news.upload.editor');
    // events routing
    Route::get('/acara', [eventAdmin::class, 'index'])->name('admin.events');
    Route::get('/acara/buat', [eventAdmin::class, 'create'])->name('admin.events.create');
    Route::post('/acara/buat/store', [eventAdmin::class, 'store'])->name('admin.events.create.store');
    Route::get('/acara/ubah/{id}', [eventAdmin::class, 'edit'])->name('admin.events.edit');
    Route::put('/acara/perbarui/{id}', [eventAdmin::class, 'update'])->name('admin.events.update');
    Route::put('/acara/detail/{id}', [eventAdmin::class, 'show'])->name('admin.events.detail');
    Route::get('/acara/upload/editore', [eventAdmin::class, 'editor'])->name('admin.events.upload.editor');
    // banners routing admin
    Route::get('/banners', [bannerAdmin::class, 'index'])->name('admin.banners');
    Route::get('/banners/create', [bannerAdmin::class, 'create'])->name('admin.banners.create');

    Route::get('/testimonial', [testimonialAdmin::class, 'index'])->name('admin.testimonial');

    // Routing pages galery
    Route::get('/gallery', [mediaAdmin::class, 'gallery'])->name('admin.gallery');
    Route::post('/gallery/post', [mediaAdmin::class, 'galleryPost'])->name('admin.gallery.post');
    Route::get('/video', [mediaAdmin::class, 'video'])->name('admin.video');

    Route::get('/logout', [authAdmin::class, 'logout'])->name('admin.logout');
});
