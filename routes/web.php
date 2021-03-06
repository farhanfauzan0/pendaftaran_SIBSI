<?php

use App\Http\Controllers\Antriancontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Bookingcontroller;
use App\Http\Controllers\Bukticontroller;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\InfopController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\Pasiencontroller;
use App\Http\Controllers\Swabcontroller;
use App\Models\Pasien;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth:web'])->group(function () {
    Route::get('/admin', [Indexcontroller::class, 'index_admin'])->name('index.admin');
    Route::get('laporan', [Indexcontroller::class, 'index_laporan'])->name('index.laporan');

    Route::resource('data', DataController::class);
    Route::resource('infos', InfosController::class);
    Route::resource('infop', InfopController::class);

    Route::get('/logout/admin', function () {
        Auth::guard('web')->logout();
        return redirect()->route('login.admin.index');
    })->name('logout.web');
});

Route::get('/login/admin', [Authcontroller::class, 'index_login_admin'])->name('login.admin.index');
Route::post('/login/admin/post', [Authcontroller::class, 'login_web_post'])->name('post.login.web');


//FRONT
Route::get('/register', [Indexcontroller::class, 'register_index'])->name('register.index');
Route::post('/register/post', [Authcontroller::class, 'post_register'])->name('register.post');

Route::get('/login', [Indexcontroller::class, 'login_index'])->name('login.index');
Route::post('/login/post', [Authcontroller::class, 'post_login'])->name('login.post');

Route::get('/tentang', [Indexcontroller::class, 'index_infos'])->name('tentang');
Route::get('/info', [Indexcontroller::class, 'index_infop'])->name('info.pendaftaran');


Route::middleware(['auth:client'])->group(function () {
    Route::get('/pendaftaran', [Indexcontroller::class, 'pendaftaran_index'])->name('pendaftaran.index');
    Route::post('/pendaftaran/post', [Indexcontroller::class, 'pendaftaran_post'])->name('pendaftaran.post');
    Route::get('/cetak/{id}', [Indexcontroller::class, 'cetak'])->name('cetak.bukti');

    Route::get('/logout', function () {
        Auth::guard('client')->logout();
        return redirect()->route('index');
    })->name('logout');
});

Route::get('/', [Indexcontroller::class, 'index'])->name('index');

Route::get('/userc', function () {
    $user = new User();
    $user->password = Hash::make('P@ssw0rd');
    $user->username = 'admin';
    $user->name = 'Admin';
    $user->save();
});
