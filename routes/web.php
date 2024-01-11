<?php

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

Auth::routes();

Route::get('/otp', [\App\Http\Controllers\Auth\RegisterController::class, 'otp'])->name('otp');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'member', 'as' =>'member.', 'middleware' =>['auth', 'checkRole:admin,member']], function (){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('index');
});
Route::group(['prefix' => 'placement', 'as' =>'placement.', 'middleware' =>['auth', 'checkRole:admin,member']], function (){
    Route::get('/', [\App\Http\Controllers\PlacementController::class, 'index'])->name('index');
});
// Route::group(['prefix' => 'message-templating', 'as' =>'messagetemplating.', 'middleware' =>['auth', 'checkRole:member,admin']], function (){
//     Route::get('/', [\App\Http\Controllers\ChatController::class, 'message'])->name('index');
// });
// Route::group(['prefix' => 'customer', 'as' =>'customer.', 'middleware' =>['auth', 'checkRole:member']], function (){
//     Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('index');
// });
// Route::group(['prefix' => 'setting', 'as' =>'setting.', 'middleware' =>['auth', 'checkRole:member']], function (){
//     Route::get('/profile-info', [\App\Http\Controllers\SettingController::class, 'index'])->name('index');
//     Route::get('/company-info', [\App\Http\Controllers\SettingController::class, 'company'])->name('company');
//     Route::get('/tag', [\App\Http\Controllers\SettingController::class, 'tag'])->name('tag');
//     Route::get('/subscription', [\App\Http\Controllers\SettingController::class, 'subscription'])->name('subscription');
//     Route::get('/subscription/checkout', [\App\Http\Controllers\SettingController::class, 'checkout'])->name('checkout');
//     Route::get('/subscription/invoice', [\App\Http\Controllers\SettingController::class, 'invoice'])->name('invoice');
//     Route::get('/integration', [\App\Http\Controllers\SettingController::class, 'integration'])->name('integration');
// });
// Route::group(['prefix' => 'auto-follow-up', 'as' =>'autofollup.', 'middleware' =>['auth', 'checkRole:member,admin']], function (){
//     Route::get('/potential-market', [\App\Http\Controllers\FollupTransController::class, 'index'])->name('index');
//     Route::get('/transaction', [\App\Http\Controllers\FollupTransController::class, 'transaction'])->name('transaction');
//     Route::get('/aftersale', [\App\Http\Controllers\FollupTransController::class, 'aftersale'])->name('aftersale');
// });
// Route::group(['prefix' => 'broadcast', 'as' =>'broadcast.', 'middleware' =>['auth', 'checkRole:member']], function (){
//     Route::get('/', [\App\Http\Controllers\BroadcastController::class, 'index'])->name('index');
// });
// Route::group(['prefix' => 'log-chat', 'as' =>'logchat.', 'middleware' =>['auth', 'checkRole:member,admin']], function (){
//     Route::get('/', [\App\Http\Controllers\LogchatController::class, 'index'])->name('index');
// });
// Route::group(['prefix' => 'transaction', 'as' =>'transaction.', 'middleware' =>['auth', 'checkRole:admin,member']], function (){
//     Route::get('/', [\App\Http\Controllers\TransactionController::class, 'index'])->name('index');
//     Route::get('/detail', [\App\Http\Controllers\TransactionController::class, 'detail'])->name('detail');
// });
