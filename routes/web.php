<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\PagesController;
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

Route::get('/done', function () {
    Artisan::call('migrate:fresh --seed');
    Artisan::call('optimize:clear');
    return 'done';
});
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
    Route::get('/home', [PagesController::class, 'home'])->name('home.index');
    Route::post('/home/store', [PagesController::class, 'store'])->name('home.store');

    // About
    Route::get('/about', [PagesController::class, 'about'])->name('about.index');
    Route::post('/about/store', [PagesController::class, 'aboutstore'])->name('about.store');
    Route::get('/about/edits/{id}', [PagesController::class, 'aboutEdit'])->name('about.edit');
    Route::put('/about/update/{id}', [PagesController::class, 'aboutUpdate'])->name('about.update');
    Route::delete('/about/delete/{id}', [PagesController::class, 'aboutDestroy'])->name('about.destroy');

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

Route::get('/setting', [PagesController::class, 'setting'])->name('setting.index');
Route::post('/setting.store', [PagesController::class, 'settingstore'])->name('setting.store');

