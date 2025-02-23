<?php

use App\Http\Controllers\Admin\Employee\EmployeeController;
use App\Http\Controllers\Admin\Institute\InstituteController;
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

Route::get('/', function () {
    return view('admin.dashboard.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('institute-info', [InstituteController::class, 'index'])->name('admin.institute');
    Route::post('institute-info', [InstituteController::class, 'storeInstitute'])->name('admin.storeorUpdateInstitute');

    // Employee
    Route::resource('employee',EmployeeController::class);
});
