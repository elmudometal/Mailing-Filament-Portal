<?php


use Illuminate\Support\Facades\Route;
use Sendportal\Base\Facades\Sendportal;

Sendportal::publicApiRoutes();

Route::middleware(['auth:api'])->group(function() {
    Sendportal::apiRoutes();
});
