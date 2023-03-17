<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BookingController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'verify' => true
]);

Route::get('/home', [HomeController::class, 'toHome'])->name('home')->middleware('verified');
Route::get('/photo-studio', [HomeController::class, 'toPhotoStudio'])->name('photoStudio');
Route::get('/photo-print', [HomeController::class, 'toPhotoPrint'])->name('photoPrint');
Route::get('/product-detail/{id}', [HomeController::class, 'toProductDetail'])->name('productDetail');
Route::get('/about-us', [HomeController::class, 'toAboutUs'])->name('aboutUs');
Route::get('/contact-us', [HomeController::class, 'toContactUs'])->name('contactUs');
Route::post('/contact-us', [HomeController::class, 'storePesan'])->name('storePesan');
Route::get('/pesanan', [HomeController::class, 'toOrder'])->name('order');
Route::get('/form-booking/{id}', [HomeController::class, 'toBookingForm'])->name('bookingForm');
Route::post('/form-booking/{id}', [HomeController::class, 'storeBookingForm'])->name('storebookingForm');

Route::get('/admin', [AdminController::class, 'indexAdmin'])->name('admin');
Route::get('/detail-user', [AdminController::class, 'indexUser'])->name('detailUser');
Route::get('/detail-product', [ProdukController::class, 'index'])->name('detailProduct');
Route::get('/add-product', [ProdukController::class, 'create'])->name('addProduct');
Route::post('/add-product', [ProdukController::class, 'storeProduct']);
Route::get('/edit-product/{product}', [ProdukController::class, 'edit'])->name('editProduct');
Route::post('/edit-productStore/{product}', [ProdukController::class, 'editStore'])->name('editProductStore');
Route::get('/delete-product/{product}', [ProdukController::class ,'delete'])->name('hapusProduct');
Route::get('/detail-booking', [BookingController::class, 'index'])->name('detailBooking');
Route::get('/edit-booking/{booking}', [BookingController::class, 'edit'])->name('editBooking');
Route::post('/edit-bookingStore/{booking}', [BookingController::class, 'editBookingStore'])->name('editBookingStore');
Route::get('/delete-booking/{booking}', [BookingController::class ,'delete'])->name('hapusBooking');
