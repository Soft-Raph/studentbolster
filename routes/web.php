<?php

use App\Helpers\Helper;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/check-date', function() {
//
//
//
// dd(Helper::canInvest());
//
//
//    return 'checked';});

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/profile/update', [App\Http\Controllers\HomeController::class, 'profile_update'])->middleware('verified')->name('profile.update');


Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->middleware('verified')->name('deposit');
Route::post('/deposit/add', [App\Http\Controllers\HomeController::class, 'deposit_add'])->middleware('verified')->name('deposit.add');


//Route::post('/add/coupon', [App\Http\Controllers\HomeController::class, 'add_coupon'])->middleware('verified')->name('add.coupon');


Route::get('/refer', [App\Http\Controllers\ReferController::class, 'refer'])->name('refer');


Route::get('/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw'])->middleware('verified')->name('withdraw');
Route::post('/withdraw/add', [App\Http\Controllers\HomeController::class, 'withdraw_add'])->middleware('verified')->name('withdraw.add');


//Route::get('/notifications', [App\Http\Controllers\NotificationController::class, 'index'])->middleware('verified')->name('notifications');
Route::get('/investment', [App\Http\Controllers\InvestmentController::class, 'invest'])->middleware('verified')->name('investment');
Route::post('/invest/update', [App\Http\Controllers\InvestmentController::class, 'update'])->middleware('verified')->name('invest.update');

Route::get('/howitwork', [App\Http\Controllers\HomeController::class, 'howitwork'])->middleware('verified')->name('howitwork');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->middleware('verified')->name('contact');

Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms'])->middleware('verified')->name('terms');


//Admin

Route::get('/admin', function () {
    return redirect('admin/home');
});

Route::get('/admin/login', [App\Http\Controllers\SettingController::class, 'index'])->name('admin.login');
Route::post('/admin/login/go', [App\Http\Controllers\SettingController::class, 'create'])->name('admin.login.go');
Route::get('/admin/home', [App\Http\Controllers\SettingController::class, 'home'])->name('admin.home');


Route::get('/admin/coupon/delete/{id}', [App\Http\Controllers\SettingController::class, 'delete_coupon'])->name('admin.coupon.delete');
Route::post('/admin/coupon/add', [App\Http\Controllers\SettingController::class, 'add_coupon'])->name('admin.coupon.add');

Route::get('/admin/dep/delete/{id}', [App\Http\Controllers\SettingController::class, 'delete_dep'])->name('admin.dep.delete');
Route::get('/admin/with/status/{id}', [App\Http\Controllers\SettingController::class, 'with_status'])->name('admin.with.status');

Route::get('/admin/user/delete/{id}', [App\Http\Controllers\SettingController::class, 'delete_user'])->name('admin.user.delete');



