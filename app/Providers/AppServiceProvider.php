<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\AIServiceInterface;
use App\Services\GeminiService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            AIServiceInterface::class,
            GeminiService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
