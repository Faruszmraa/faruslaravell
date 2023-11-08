<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\phonkcontroller;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Login;

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
Route::middleware(['guest'])->group(function(){
    Route::get('/', function () {

        return view('/phonk/home');
    });
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
    
});




Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
Route::get('/phonk/beritaKSI', [phonkcontroller::class, 'beritaKSI'])->name('phonk.beritaKSI');
Route::get('/phonk/profileKelulusanKSI', [phonkcontroller::class, 'profileKelulusanKSI'])->name('phonk.profileKelulusanKSI');
Route::get('/phonk/profileDosen', [phonkcontroller::class, 'profileDosen'])->name('phonk.profileDosen');
Route::get('/phonk/home', [phonkcontroller::class, 'home'])->name('phonk.home');
Route::get('/user/home', [LoginRegisterController::class, 'home'])->name('user.home');
Route::get('/admin/home', [LoginRegisterController::class, 'home'])->name('admin.home');

Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');


Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');

Route::group(['middleware' => ['auth', 'checklevel:admin']], function() {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
    Route::get('/admin/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
    Route::get('/admin/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('deletAdmin');
    Route::get('/form/inputBeritaKSI', [phonkcontroller::class, 'inputBeritaKSI'])->name('form.inputBeritaKSI');
    Route::get('/form/inputDataDosen', [phonkcontroller::class, 'inputDataDosen'])->name('form.inputDataDosen');
    Route::get('/admin/buku', [AdminController::class, 'adminBuku'])->name('admin.buku');
    Route::get('postambahBuku', [AdminController::class, 'tambahBuku'])->name('admin.tambahBuku');
    Route::post('/postTambahBuku', [AdminController::class, 'postTambahBuku'])->name('postTambahBuku');
    Route::get('/admin/editBuku/{id}', [AdminController::class, 'editBuku'])->name('admin.editBuku');
    Route::post('/admin/postEditBuku/{id}', [AdminController::class, 'postEditBuku'])->name('admin.postEditBuku');
    Route::get('/admin/deleteBuku/{id}', [AdminController::class, 'deleteBuku'])->name('admin.deleteBuku');
});

Route::group(['middleware' => ['auth', 'checklevel:user']], function() {
Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/phonk/beritaKSI', [phonkcontroller::class, 'beritaKSI'])->name('phonk.beritaKSI');
    Route::get('/phonk/profileKelulusanKSI', [phonkcontroller::class, 'profileKelulusanKSI'])->name('phonk.profileKelulusanKSI');
    Route::get('/phonk/profileDosen', [phonkcontroller::class, 'profileDosen'])->name('phonk.profileDosen');
});



Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/tambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');
Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');
Route::get('/postEditBuku/{id}', [AdminController::class, 'postEditBuku'])->name('postEditBuku');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');


