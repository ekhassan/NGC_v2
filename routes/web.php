<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubmailController;

  
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
  

//Users

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  

//Admin

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
  
    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('products.index');
});
  

// manager

Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

// Service
Route::get('choose',[ContactController::class,'chooseHelp'])->name('choose');
Route::get('design',[ContactController::class,'designYour'])->name('design');
Route::get('ship',[ContactController::class,'readyShip'])->name('toship');



// Contact US
Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

// Subscribe Mail
Route::get('/', [SubmailController::class, 'submail']);
Route::post('submail', [SubmailController::class, 'substore'])->name('contact.us.substore');

// CRUD
Route::resource('products', ProductController::class);

