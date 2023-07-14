<?php

use App\Http\Controllers\Frontend\AuthorController;
use App\Http\Controllers\Frontend\BooksController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
//path for using the controller that we make
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


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
//---------------------- Check user logged in Or not -------------
// //------------------ For a single route:

// Route::get('profile', function () {
//     // Only authenticated users may enter...
// })->middleware('auth');

// //------------------ For multiple routes ---------------------:

Route::group(['middleware' => ['webguard']], function () {
    // your routes

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/index', [HomeController::class, 'index']);
    Route::get('/books', [BooksController::class, 'index']);
    Route::get('/author', [AuthorController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/reviews', [ReviewController::class, 'index']);
    // ------------ for logout -----------------
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});

//---------------------routes for viewing practice on bladeTemplateEngine ------------
Route::get('/blade1',function(){
    return view('bladeTemplateEngine.bladepractice1');
});
Route::get('/blade2',function(){
    return view('bladeTemplateEngine.bladepractice2');
});
//---------------------routes for register to view and post|save data
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'register']);
//---------------------routes for login to view and post|save data
Route::get('/login', function () {
    return view('login');
})->name('get-login');
Route::post('/login', [UserController::class, 'login'])->name('login');
//---------------------routes for forgotPassword to view and post|save data
Route::get('/forgotPassword', function () {
    return view('forgotPassword');
})->name('forgetPassword');
Route::post('/forgotPassword', [UserController::class, 'forgotPassword']);
Route::get('/resetPassword/{token}', function () {
    return view('email.forgetPassword');
});
Route::post('/forgotPassword', [UserController::class, 'forgotPassword']);


//--------------- Route for todo table using its controllers --------------------------------
Route::get('/todos', [TodoController::class,'index']);
