<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\OurServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionsController;
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/home', [PagesController::class, 'home'])->name('home.index');
    Route::post('/home/store', [PagesController::class, 'store'])->name('home.store');

    // Testimonial 
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('partner', PartnerController::class);

    // About
    Route::get('/about', [PagesController::class, 'about'])->name('about.index');

    // Home Sections
    Route::get('/home_section1', [SectionsController::class, 'home_section1'])->name('home_section1.index');
    Route::get('/home_section2', [SectionsController::class, 'home_section2'])->name('home_section2.index');
    Route::get('/home_section3', [SectionsController::class, 'home_section3'])->name('home_section3.index');
    Route::get('/home_section4', [SectionsController::class, 'home_section4'])->name('home_section4.index');
    Route::get('/home_section5', [SectionsController::class, 'home_section5'])->name('home_section5.index');
    Route::get('/home_section6', [SectionsController::class, 'home_section6'])->name('home_section6.index');

    // About Sections
    Route::get('/about_section1', [SectionsController::class, 'about_section1'])->name('about_section1.index');
    Route::get('/about_section2', [SectionsController::class, 'about_section2'])->name('about_section2.index');
    Route::get('/about_section3', [SectionsController::class, 'about_section3'])->name('about_section3.index');
    Route::get('/about_section4', [SectionsController::class, 'about_section4'])->name('about_section4.index');

    // Get a puppy Sections
    Route::get('/get_section1', [SectionsController::class, 'get_section1'])->name('get_section1.index');

    // Available Pup Sections
    Route::get('/available_section1', [SectionsController::class, 'available_section1'])->name('available_section1.index');
    Route::get('/available_section2', [SectionsController::class, 'available_section2'])->name('available_section2.index');
    Route::get('/available_section3', [SectionsController::class, 'available_section3'])->name('available_section3.index');
    Route::get('/available_section4', [SectionsController::class, 'available_section4'])->name('available_section4.index');

    // Planned Breed Sections
    Route::get('/breed_section1', [SectionsController::class, 'breed_section1'])->name('breed_section1.index');

    // Bulldog Stronger Sections
    Route::get('/stronger_section1', [SectionsController::class, 'stronger_section1'])->name('stronger_section1.index');
    Route::get('/stronger_section2', [SectionsController::class, 'stronger_section2'])->name('stronger_section2.index');
    Route::get('/stronger_section3', [SectionsController::class, 'stronger_section3'])->name('stronger_section3.index');
    Route::get('/stronger_section4', [SectionsController::class, 'stronger_section4'])->name('stronger_section4.index');
    Route::get('/stronger_section5', [SectionsController::class, 'stronger_section5'])->name('stronger_section5.index');
    Route::get('/stronger_section6', [SectionsController::class, 'stronger_section6'])->name('stronger_section6.index');



    Route::post('/about/store', [PagesController::class, 'aboutstore'])->name('about.store');
    Route::get('/about/edits/{id}', [PagesController::class, 'aboutEdit'])->name('about.edit');
    Route::put('/about/update/{id}', [PagesController::class, 'aboutUpdate'])->name('about.update');
    Route::delete('/about/delete/{id}', [PagesController::class, 'aboutDestroy'])->name('about.destroy');

    Route::resource('roles', RoleController::class);

        Route::resource('permission', PermissionController::class);
        // user route
    Route::resource('users',UsersController::class);
    Route::resource('services',OurServiceController::class);
    

    Route::resource('permission', PermissionController::class);
    // user route
    Route::resource('users', UsersController::class);


});
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'role:user']], function () {
    Route::get('/dashboard', function () {
        return view('user.layouts.app'); })->middleware(['auth', 'verified'])->name('user.dashboard');



});

Route::get('/admin/dashboard', function () {
    return view('admin.layouts.app'); })->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/setting', [PagesController::class, 'setting'])->name('setting.index');
Route::post('/setting.store', [PagesController::class, 'settingstore'])->name('setting.store');


require __DIR__ . '/auth.php';

