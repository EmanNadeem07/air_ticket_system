<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('bookingForm/{flight_id}', [DashboardController::class, 'bookingForm'])->middleware('auth')->name('bookingForm');
Route::post('store/booking', [DashboardController::class, 'storeBooking'])->middleware('auth')->name('store.booking');
Route::get('payment/{booking_id}', [DashboardController::class, 'payment'])->middleware('auth')->name('payment');
Route::get('showTicket/{booking_id}', [DashboardController::class, 'showTicket'])->middleware('auth')->name('showTicket');
Route::get('about', function () {
    return view('pages.about');
})->name('about');
Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');
