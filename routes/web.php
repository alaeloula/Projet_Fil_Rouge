<?php

// use app\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index']);



Route::get('about', function () {
    return view('home.about');
})->name('about');
Route::get('contact', function () {
    return view('home.contact');
})->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





Route::middleware(['auth', 'userType:1'])->group(function () {
    Route::resource('product', ProductController::class);
    Route::resource('Category', CategoryController::class);
    Route::get('print/{id}', [OrderController::class, 'print']);
    Route::get('send_email/{id}', [OrderController::class, 'sendEmail']);
    Route::get('order', [OrderController::class, 'order'])->name('order');
});

Route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
// Route::resource('Category', CategoryController::class)->middleware(['auth','userType:1']);;
// Route::resource('product', ProductController::class);
Route::post('add_cart/{id}', [HomeController::class, 'add_cart']);
Route::get('show_cart', [HomeController::class, 'show_cart']);
Route::get('remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::get('cash_order', [HomeController::class, 'cash_order']);
Route::get('stripe/{totalePrice}', [HomeController::class, 'stripe']);
Route::post('stripe/{totalePrice}', [HomeController::class, 'stripePost'])->name('stripe.post');

// Route::get('order', [OrderController::class, 'order'])->name('order');
Route::get('delivered/{id}', [OrderController::class, 'delivered']);


// Route::get('print/{id}',[OrderController::class,'print']);
// Route::get('send_email/{id}',[OrderController::class,'sendEmail']);
Route::post('send_user_email/{id}', [OrderController::class, 'send_user_email']);
Route::get('search', [OrderController::class, 'searchdata']);



Route::get('order_user', [HomeController::class, 'order_user']);
Route::get('cancel_order/{id}', [HomeController::class, 'cancel_order']);



Route::post('add_comment', [HomeController::class, 'add_comment']);
Route::post('add_reply', [HomeController::class, 'add_reply']);
