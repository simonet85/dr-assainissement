<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;

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

// Route::get('/dashboard/home', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Page controller routes , group routes under PageController class
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/services', 'services')->name('services');
    Route::get('/resources', 'resources')->name('resources');
    Route::get('/news', 'news')->name('news');
    Route::get('/contact', 'contact')->name('contact');
});



// Dashboard controller routes
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function() {
    // Dashboard Controller
    Route::resource('/home', DashboardController::class);
    // Projects Controller
    Route::resource('/projects', ProjectsController::class);
    // Categories Controller
    Route::resource('/categories', CategoriesController::class);

});


require __DIR__.'/auth.php';
