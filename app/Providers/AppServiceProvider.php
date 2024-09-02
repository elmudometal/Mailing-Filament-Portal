<?php

namespace App\Providers;

use App\Models\ApiToken;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Sendportal\Base\Facades\Sendportal;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Sendportal::setCurrentWorkspaceIdResolver(
            static function () {
                return 1;
            }
        );
    }
}
