<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestDriveController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('cars', CarController::class);
Route::get('/', function () {
    return view('cars.home');
});
Route::get('/mauxe', function () {
    return view('cars.mauxe');
});
Route::get('/datlich', function () {
    return view('cars.datlich');
});
Route::get('/phanphoi', function () {
    return view('cars.phanphoi');
});
// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     Route::get('/cars', [AdminController::class, 'cars'])->name('admin.cars');
//     Route::get('/test-drives', [AdminController::class, 'testDrives'])->name('admin.testdrives');
// });
Route::post('/datlich', [TestDriveController::class, 'store'])->name('testdrive.store');
Route::get('/admin/lich-lai-thu', [TestDriveController::class, 'index'])->name('testdrive.index');


require __DIR__.'/auth.php';
