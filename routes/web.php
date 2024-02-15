<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'control', 'as' => 'admin.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
});
