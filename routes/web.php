<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestDriveController;
use App\Http\Controllers\Admin\VehicleTypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;

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
})->middleware(['auth', 'is_admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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

Route::post('/datlich', [TestDriveController::class, 'store'])->name('testdrive.store');
Route::get('/admin/lich-lai-thu', [TestDriveController::class, 'index'])->name('testdrive.index');
Route::get('/admin/vehicle-types', [VehicleTypeController::class, 'index'])->name('admin.vehicle-types.index');
Route::resource('vehicle-types', VehicleTypeController::class);
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('vehicle-types', VehicleTypeController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'is_admin'])->name('dashboard');
Route::get('/admin/test-drives', [TestDriveController::class, 'index'])->name('admin.test-drives.index');

use App\Http\Controllers\AccountController;

Route::middleware(['auth'])->group(function () {
    Route::get('/account', [AccountController::class, 'show'])->name('account.home');
    Route::get('/account/schedule', [AccountController::class, 'schedule'])->name('account.schedule');

    Route::put('/admin/test-drives/{id}', [TestDriveController::class, 'update'])->name('admin.test_drives.update');
    Route::get('/testdrive/{id}/edit', [TestDriveController::class, 'edit'])->name('testdrive.edit');
    Route::put('/testdrive/{id}', [TestDriveController::class, 'update'])->name('testdrive.update');
    Route::delete('/testdrive/{id}', [TestDriveController::class, 'destroy'])->name('testdrive.destroy');
    Route::delete('/admin/test-drives/{id}', [TestDriveController::class, 'destroy'])->name('admin.test_drives.destroy');

});



require __DIR__.'/auth.php';