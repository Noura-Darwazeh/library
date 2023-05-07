<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\librarycontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/',)
//Route::get('/', '');
Route::view('ho', 'ho');
//Route::get('/register', [App\Http\Controllers\librarycontroller::class, 'register']);
Route::post('/registeruser', [App\Http\Controllers\librarycontroller::class, 'registeruser'])->name('register-user');
Route::post('/login', [App\Http\Controllers\librarycontroller::class, 'login'])->name('login');
Route::get('/loginuser', [App\Http\Controllers\librarycontroller::class, 'loginuser']);
Route::get('/', [App\Http\Controllers\librarycontroller::class, 'index']);
Route::get('/admin', [App\Http\Controllers\librarycontroller::class, 'admin']);
Route::get('/user', [App\Http\Controllers\librarycontroller::class, 'user']);
Route::get('/list', [App\Http\Controllers\librarycontroller::class, 'list']);
Route::get('/add', [App\Http\Controllers\librarycontroller::class, 'add']);
Route::post('/add', [App\Http\Controllers\librarycontroller::class, 'addbook']);
Route::get('/register', [App\Http\Controllers\librarycontroller::class, 'register']);
Route::get('/dashboard', [App\Http\Controllers\librarycontroller::class, 'dashboard']);
Route::post('/adminlogin', [App\Http\Controllers\librarycontroller::class, 'adminlogin'])->name('adminlogin');
Route::get('/listadmin',[App\Http\Controllers\librarycontroller::class, 'listadmin']);