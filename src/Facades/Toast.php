<?php

namespace Hafizulislamhfz\DyToast\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Hafizulislamhfz\DyToast\ToastManager success(string $message, ?int $timeout = null)
 * @method static \Hafizulislamhfz\DyToast\ToastManager error(string $message, ?int $timeout = null)
 * @method static \Hafizulislamhfz\DyToast\ToastManager warning(string $message, ?int $timeout = null)
 * @method static \Hafizulislamhfz\DyToast\ToastManager info(string $message, ?int $timeout = null)
 *
 * @see \Hafizulislamhfz\DyToast\ToastManager
 */
class Toast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * This method is used by Laravel to resolve the facade to its underlying
     * service in the service container. The string returned here should
     * correspond to the binding name in the container.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'toast';
    }
}
