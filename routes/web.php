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
Route::get('/', function () {
    return view('test.welcome');
});

Route::get('test/',[TestController::class,'test_function']);

//ROUTES DOSTAWCY
Route::get('suppliers/',[SupplierController::class,'index']);

