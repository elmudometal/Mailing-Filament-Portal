<?php

use Illuminate\Support\Facades\Route;
use Sendportal\Base\Facades\Sendportal;

Route::get('/', function () {
    return view('welcome');
});

Sendportal::publicWebRoutes();

Route::middleware(['auth'])->prefix('sendportal')->group(function () {
    Sendportal::webRoutes();
});
