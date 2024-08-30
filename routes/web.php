<?php

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

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesManagerController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/clear-cache',function(){
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('view:cache');
    \Artisan::call('view:clear');


    return ('clear');
});


Route::group(['middleware' => ['auth', 'admin']], function () {
    // Admin routes

    //dashboard
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('admin/sale-manager/all', [AdminController::class, 'allSalesManager'])->name('admin.sale.all');
    Route::get('admin/sale-manager/create', [AdminController::class, 'createSalesManager'])->name('admin.sale.create');
    Route::post('admin/sale-manager/store', [AdminController::class, 'storeSalesManager'])->name('admin.sale.store');
    Route::get('admin/sale-manager/{id}/edit', [AdminController::class, 'editSalesManager'])->name('admin.sale.edit');
    Route::post('admin/sale-manager/{id}/update', [AdminController::class, 'updateSalesManager'])->name('admin.sale.update');
    Route::get('admin/sale-manager/{id}/delete', [AdminController::class, 'deleteSalesManager'])->name('admin.sale.delete');

});


Route::group(['middleware' => ['auth', 'editor']], function () {
    // Editor routes
    Route::get('member/dashboard', [SalesManagerController::class, 'dashboard'])->name('member.dashboard');

});



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
