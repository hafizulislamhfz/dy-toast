<?php

namespace Hafizulislamhfz\DyToast\Providers;

use Hafizulislamhfz\DyToast\ToastManager;
use Illuminate\Support\ServiceProvider;

class ToastServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        require_once __DIR__.'./../Helpers/toast.php';

        // Bind Toast to service container
        $this->app->singleton('toast', function () {
            return new ToastManager;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../resources/views/components/toast.blade.php' => resource_path('views/components/dy-toast/toast.blade.php'),
        ], 'toast');
    }
}
