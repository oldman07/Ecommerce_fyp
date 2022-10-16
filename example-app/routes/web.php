<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('contact_us','contact');
Route::view('about_us','about_us');
Route::view('admin_pannel','admin_pannel');

#controller areas
Route::get('customers', [CustomersController::class, 'list']);
Route::post('customers',[CustomersController::class, 'store']);
