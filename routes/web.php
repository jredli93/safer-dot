<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;

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



Route::get('/', 'PageController@index')->name('home');
Route::get('/about-us', 'PageController@about')->name('about-us');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/careers', 'PageController@careers')->name('careers');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/application', [ApplicationController::class, 'ApplicationForm'])->name('application.send');
Route::post('/contact-send', [ContactController::class, 'ContactForm'])->name('contact.send');
Route::post('/driver-send', [ContactController::class, 'DriverForm'])->name('contact.driver');
Route::post('/operator-send', [ContactController::class, 'OperatorForm'])->name('contact.operator');
