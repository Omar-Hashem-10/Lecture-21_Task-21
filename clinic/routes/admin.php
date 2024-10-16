<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;

Route::prefix('admin')->as('admin.')->group(function () {


    Route::get('/', DashboardController::class)->name('pages.home.dashboard');

});

