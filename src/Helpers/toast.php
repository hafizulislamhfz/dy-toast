<?php

declare(strict_types=1);

use Hafizulislamhfz\DyToast\Facades\Toast;

if (! function_exists('toast')) {
    /**
     * Flash a toast message to the session.
     *
     * @param  string  $message  The toast message.
     * @param  string  $type  The toast type ('success', 'error', 'warning', 'info').
     * @param  int  $timeout  Optional timeout in milliseconds (default: 5000).
     */
    function toast(string $message, string $type = 'success', int $timeout = 5000): void
    {
        Toast::$type($message, $timeout);
    }
}
