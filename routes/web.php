<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



route::get('service/index', [ServiceController::class, 'index'])->name('service.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');
route::get('/about', [PageController::class, 'about'])->name('about');
route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });
