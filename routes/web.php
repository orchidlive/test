<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Repositories\Owner\OwnerRepositoryInterface;
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

Route::get('/', function (OwnerRepositoryInterface $ownerRepository) {
    return view('welcome')->with('owners', $ownerRepository->getAll());
});


Route::resources([
    'owner.cars' => CarController::class,
]);

Route::get('/owner', [OwnerController::class, 'index'])->name('owner.index');
Route::post('/owner', [OwnerController::class, 'store'])->name('owner.store');
Route::get('/owner/create', [OwnerController::class, 'create'])->name('owner.create');
Route::get('/owner/{ownerId}/edit', [OwnerController::class, 'edit'])->name('owner.edit');
Route::get('/owner/{ownerId}', [OwnerController::class, 'show'])->name('owner.show');
Route::put('/owner/{ownerId}', [OwnerController::class, 'update'])->name('owner.update');
Route::delete('/owner/{ownerId}', [OwnerController::class, 'delete'])->name('owner.delete');

//Route::group(['prefix' => '/owner/{ownerId}', 'as' => 'owners.cars.'], static function () {
//    Route::get('/cars', [CarController::class, 'index'])->name('index');
//    Route::post('/cars', [CarController::class, 'store'])->name('store');
//    Route::get('/cars/create', [CarController::class, 'create'])->name('create');
//    Route::get('/cars/{carId}/edit', [CarController::class, 'edit'])->name('edit');
//    Route::get('/cars/{carId}', [CarController::class, 'show'])->name('show');
//    Route::put('/cars/{carId}', [CarController::class, 'update'])->name('update');
//    Route::delete('/cars/{carId}', [CarController::class, 'delete'])->name('delete');
//
//});
