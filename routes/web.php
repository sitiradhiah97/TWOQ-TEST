<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Models\Company;

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



// GET

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/company', function () {
    $company = DB::table('company_details')->get();

    return view('company.index',['company' => $company]);
});

Route::get('/company/create', [CompanyController::class, 'create']);


Route::get('/', [LoginController::class, 'index']);
Route::get('/', [LoginController::class, 'index']);

Route::get('/company/view/{id}', function($id){
    return App::call('App\Http\Controllers\CompanyController@view' , ['id' => $id]);
});
Route::get('/company/edit/{id}', function($id){
    return App::call('App\Http\Controllers\CompanyController@edit' , ['id' => $id]);
});
Route::delete('/delete/{id}', [CompanyController::class ,'delete'])->name('company.destroy');


// POST

Route::post('/check', [LoginController::class, 'check'])->name('check');
Route::post('/store', [CompanyController::class, 'store'])->name('store');
// Route::post('/update', [CompanyController::class, 'store'])->name('update/');
Route::post('/update/{id}', function($id){
   return App::call('App\Http\Controllers\CompanyController@update' , ['id' => $id]);
 })->name('update/{id}');



