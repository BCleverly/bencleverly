<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Flash\Flash;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Flash::levels([
            'success' => 'bg-green-500 text-green-900',
            'warning' => 'bg-orange-500 text-orange-900',
            'error' => 'bg-red-500 text-red-900'
        ]);
    }
}
