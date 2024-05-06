<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('website');
});

// Route admin 
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// Route blog
Route::get('/blog/create', function () {
    return view('blog.create');
});

Route::get('/blog', function () {
    return view('blog.index');
});

// Route User
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');



// Route::middleware('auth')->group(function () {
//     Route::get('/', function () {
//         return view('website');
//     });

//     // Rotas para o admin
//     Route::prefix('admin')->group(function () {
//         Route::get('/', [AdminController::class, 'index'])->name('admin.index');
//         Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     });

//     // Rotas para o blog
//     Route::prefix('blog')->group(function () {
//         Route::get('/create', [BlogController::class, 'create'])->name('blog.create');
//         Route::get('/', [BlogController::class, 'index'])->name('blog.index');
//     });

//     // Rotas para os usuários
//     Route::prefix('users')->group(function () {
//         Route::get('/', [UserController::class, 'index'])->name('users.index');
//         Route::get('/{id}', [UserController::class, 'show'])->name('users.show');
//     });
// });
