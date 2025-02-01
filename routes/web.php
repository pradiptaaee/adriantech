<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');

route::get('/about', [PageController::class, 'about'])->name('about');
route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });
