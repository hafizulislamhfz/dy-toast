<?php

namespace Hafizulislamhfz\DyToast\Providers;

use Hafizulislamhfz\DyToast\Console\PublishCommand;
use Hafizulislamhfz\DyToast\ToastManager;
use Illuminate\Support\ServiceProvider;

class ToastServiceProvider extends ServiceProvider
{
    /**
     * Register services within the service container.
     *
     * This method is used to bind services to the service container.
     * In this case, we are binding the ToastManager class to the container
     * to ensure it can be resolved when needed.
     */
    public function register(): void
    {
        // Include the helper functions file for toast
        require_once __DIR__.'./../Helpers/toast.php';

        // Bind the ToastManager to the 'toast' key in the service container as a singleton.
        // This means only one instance of ToastManager will exist throughout the application's lifecycle.
        $this->app->singleton('toast', function () {
            return new ToastManager;
        });
    }

    /**
     * Bootstrap services after the container is registered.
     *
     * This method is used to perform any actions that should take place
     * after all services have been registered in the container. Typically,
     * this method is used to set up event listeners, routes, or other
     * application bootstrapping logic.
     */
    public function boot(): void
    {
        // Register publishing of package resources (views, config, etc.)
        $this->registerPublishing();

        // Register custom Artisan commands, if any.
        $this->registerCommands();
    }

    /**
     * Register the package's publishable resources.
     *
     * This method registers resources (like views or config files) that
     * can be published to the application's resource folder by running
     * an Artisan command. The resources specified in the `publishes`
     * method can be copied to the application's directory for customization.
     */
    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../resources/views/components/toast.blade.php' => resource_path('views/components/dy-toast/toast.blade.php'),
                __DIR__.'/../../config/dytoast.php' => config_path('dytoast.php'),
            ], 'toast');
        }
    }

    /**
     * Register the package's custom Artisan commands.
     *
     * This method is used to register the Artisan commands that the package provides.
     * It allows you to add your custom commands to the Laravel console.
     * The `PublishCommand` is registered here.
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);
        }
    }
}
