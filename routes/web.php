<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreebetControler;
use App\Http\Controllers\authcontroller;

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

Route::get('/', [FreebetControler::class, 'getData']);
Route::get('/form', [FreebetControler::class, 'getDataChanel'])->middleware(['auth'])->name('form');

Route::delete('/delete/{id}', [FreebetControler::class, 'delete']);
Route::put('/tolak/{id}', [FreebetControler::class, 'tolak']);
Route::put('/setujui/{id}', [FreebetControler::class, 'setujui']);

Route::get('/freebet-member', [FreebetControler::class, 'getDataFreebet'])->middleware(['auth'])->name('freebet-member');

Route::get('/search', [FreebetControler::class, 'getDataSearch']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/beranda', function () {
    return view('beranda');
})->middleware(['auth'])->name('beranda');

// Route::get('/form', function () {
//     return view('form');
// })->middleware(['auth'])->name('form');

Route::get('/formfreebet/{id}', [FreebetControler::class, 'formfreebet']);

Route::get('/freebet-done', function () {
    return view('freebetdone');
});

Route::get('/ip', function () {
    $checkLocation = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    return $checkLocation->ip;
});


Route::post('/freebet', [FreebetControler::class, 'post']);
// Route::post('/authLogin', [authcontroller::class, 'login']);

require __DIR__.'/auth.php';
