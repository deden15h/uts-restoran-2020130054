<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialsController;

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

Route::get('/', [HomeController::class,'index'])-> name ('home');


Route::get('/products', PortfolioController::class )-> name ('products');

Route::get('/testimonials', TestimonialsController::class )-> name ('testimonials');

Route::get('/about', AboutController::class, 'about')-> name ('about');





