<?php


use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


route::get('/about', [PageController::class, 'about'])->name('about');
route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });
