<?php


use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CostcenterController;
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

// ROUTE TESTOWA ------------------------------
Route::get('/abc', function () {
    return view('templates.welcome');
});

Route::get('test/test',[TestController::class,'test_function']);

// ROUTE MAIN

Route::get('/start', function () {

    return view('templates.start');
});

//ROUTES DOSTAWCY ------------------------------
Route::get('suppliers/',[SupplierController::class,'index'])->name('suppliers.index');
Route::get('suppliers/search',[SupplierController::class,'search'])->name('suppliers.search');
Route::get('suppliers/create',[SupplierController::class,'create'])->name('suppliers.create');
Route::post('suppliers',[SupplierController::class,'store'])->name('suppliers.store');
Route::get('suppliers/{id}',[SupplierController::class,'show'])->name('suppliers.show');
Route::get('suppliers/{id}/edit',[SupplierController::class,'edit'])->name('suppliers.edit');
Route::post('suppliers/{id}/update',[SupplierController::class,'update'])->name('suppliers.update');
Route::get('suppliers/{id}/delete',[SupplierController::class,'delete'])->name('suppliers.delete');
Route::post('suppliers/{id}/destroy',[SupplierController::class,'destroy'])->name('suppliers.destroy');

//ROUTES COSTCENTERS ------------------------------
Route::get('costcenters/',[CostcenterController::class,'index'])->name('costcenters.index');
Route::get('costcenters/search',[CostcenterController::class,'search'])->name('costcenters.search');
Route::get('costcenters/create',[CostcenterController::class,'create'])->name('costcenters.create');
Route::post('costcenters',[CostcenterController::class,'store'])->name('costcenters.store');
Route::get('costcenters/{id}',[CostcenterController::class,'show'])->name('costcenters.show');
Route::get('costcenters/{id}/edit',[CostcenterController::class,'edit'])->name('costcenters.edit');
Route::post('costcenters/{id}/update',[CostcenterController::class,'update'])->name('costcenters.update');
Route::get('costcenters/{id}/delete',[CostcenterController::class,'delete'])->name('costcenters.delete');
Route::post('costcenters/{id}/destroy',[CostcenterController::class,'destroy'])->name('costcenters.destroy');
