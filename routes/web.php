<?php


use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StorageplaceController;
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

// ROUTE MAIN ------------------------------

Route::get('/start', function () {

    return view('templates.start');

})->name('argentum.mainmenu');

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

//ROUTES STORAGEPLACES ------------------------------
Route::get('storagesplaces/',[StorageplaceController::class,'index'])->name('storagesplaces.index');
Route::get('storagesplaces/search',[StorageplaceController::class,'search'])->name('storagesplaces.search');
Route::get('storagesplaces/create',[StorageplaceController::class,'create'])->name('storagesplaces.create');
Route::post('storagesplaces',[StorageplaceController::class,'store'])->name('storagesplaces.store');
Route::get('storagesplaces/{id}',[StorageplaceController::class,'show'])->name('storagesplaces.show');
Route::get('storagesplaces/{id}/edit',[StorageplaceController::class,'edit'])->name('storagesplaces.edit');
Route::post('storagesplaces/{id}/update',[StorageplaceController::class,'update'])->name('storagesplaces.update');
Route::get('storagesplaces/{id}/delete',[StorageplaceController::class,'delete'])->name('storagesplaces.delete');
Route::post('storagesplaces/{id}/destroy',[StorageplaceController::class,'destroy'])->name('storagesplaces.destroy');

//ROUTES ITEMS ------------------------------
Route::get('items/',[ItemController::class,'index'])->name('items.index');
Route::get('items/search',[ItemController::class,'search'])->name('items.search');
Route::get('items/create',[ItemController::class,'create'])->name('items.create');
Route::post('items',[ItemController::class,'store'])->name('items.store');
Route::get('items/{id}',[ItemController::class,'show'])->name('items.show');
Route::get('items/{id}/edit',[ItemController::class,'edit'])->name('items.edit');
Route::post('items/{id}/update',[ItemController::class,'update'])->name('items.update');
Route::get('items/{id}/delete',[ItemController::class,'delete'])->name('items.delete');
Route::post('items/{id}/destroy',[ItemController::class,'destroy'])->name('items.destroy');
