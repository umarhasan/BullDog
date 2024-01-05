<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){

    Route::resource('roles', RoleController::class);
        Route::resource('permission', PermissionController::class);
        // user route
    Route::resource('users',UsersController::class);

});
Route::group(['prefix'=>'user','middleware'=>['auth','role:user']],function(){
    Route::get('/dashboard', function () { return view('user.layouts.app');})->middleware(['auth', 'verified'])->name('user.dashboard');



});

Route::get('/admin/dashboard', function () { return view('admin.layouts.app');})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
