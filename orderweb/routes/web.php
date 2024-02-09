<?php

use App\Http\Controllers\CausalController;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\TypeActivityController;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/test2', function () {
    return view('test2');
})->name('test2');

Route::prefix('causal')->group(function(){
    Route::get('/index', [CausalController::class, 'index'])->name('causal.index');
    Route::get('/create', [CausalController::class, 'create'])->name('causal.create');
    Route::get('/edit/{id}', [CausalController::class, 'edit'])->name('causal.edit');
    Route::post('/create', [CausalController::class, 'store'])->name('causal.store');
    Route::put('/edit/{id}', [CausalController::class, 'update'])->name('causal.update');
    Route::get('/destroy/{id}', [CausalController::class, 'destroy'])->name('causal.destroy');
});

Route::prefix('observation')->group(function(){
    Route::get('/index', [ObservationController::class, 'index'])->name('observation.index');
    Route::get('/create', [ObservationController::class, 'create'])->name('observation.create');
    Route::get('/edit/{id}', [ObservationController::class, 'edit'])->name('observation.edit');
    Route::post('/create', [ObservationController::class, 'store'])->name('observation.store');
    Route::put('/edit/{id}', [ObservationController::class, 'update'])->name('observation.update');
    Route::get('/destroy/{id}', [ObservationController::class, 'destroy'])->name('observation.destroy');
});

Route::get('/observation/create', function () {
    return view('observation.create');
})->name('observation.create');

Route::get('/observation/index', function () {
    return view('observation.index');
})->name('observation.index');

Route::get('/observation/edit', function () {
    return view('observation.edit');
})->name('observation.edit');


Route::prefix('type_ activityController')->group(function(){
    Route::get('/index', [TypeActivityController::class, 'index'])->name('type_activity.index');
    Route::get('/create', [TypeActivityController::class, 'create'])->name('type_activity.create');
    Route::get('/edit/{id}', [TypeActivityController::class, 'edit'])->name('typea_activity.edit');
    Route::post('/create', [TypeActivityController::class, 'store'])->name('typea_activity.store');
    Route::put('/edit/{id}', [TypeActivityController::class, 'update'])->name('type_activity.update');
    Route::get('/destroy/{id}', [TypeActivityController::class, 'destroy'])->name('typea_activity.destroy');
});

Route::get('/type_activity/create', function () {
    return view('type_activity.create');
})->name('type_activity.create');

Route::get('/type_activity/index', function () {
    return view('type_activity.index');
})->name('type_activity.index');

Route::get('/type_activity/edit', function () {
    return view('type_activity.edit');
})->name('type_activity.edit');



Route::get('/activity/create', function () {
    return view('activity.create');
})->name('activity.create');

Route::get('/activity/index', function () {
    return view('activity.index');
})->name('activity.index');

Route::get('/activity/edit', function () {
    return view('activity.edit');
})->name('activity.edit');


Route::get('/technician/create', function () {
    return view('technician.create');
})->name('technician.create');

Route::get('/technician/index', function () {
    return view('technician.index');
})->name('technician.index');

Route::get('/technician/edit', function () {
    return view('technician.edit');
})->name('technician.edit');



Route::get('/order/create', function () {
    return view('order.create');
})->name('order.create');

Route::get('/order/index', function () {
    return view('order.index');
})->name('order.index');

Route::get('/order/edit', function () {
    return view('order.edit');
})->name('order.edit');

