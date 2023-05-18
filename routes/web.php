<?php


use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TestController;
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

// ROUTE TESTOWA
Route::get('/abc', function () {
    return view('templates.welcome');
});

Route::get('test/',[TestController::class,'test_function']);

//ROUTES DOSTAWCY

Route::get('suppliers/',[SupplierController::class,'index']);
Route::get('suppliers/create',[SupplierController::class,'create'])->name('suppliers.create');
Route::post('suppliers',[SupplierController::class,'store'])->name('suppliers.store');
Route::get('suppliers/{id}',[SupplierController::class,'show'])->name('suppliers.show');
Route::get('suppliers/{id}/edit',[SupplierController::class,'edit'])->name('suppliers.edit');
Route::post('suppliers/{id}/update',[SupplierController::class,'update'])->name('suppliers.update');
Route::get('suppliers/{id}/delete',[SupplierController::class,'destroy'])->name('suppliers.destroy');


