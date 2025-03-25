<?php

declare(strict_types=1);

namespace Hafizulislamhfz\DyToast;

class ToastManager
{
    /**
     * Show a success toast.
     *
     * @param  string  $message  The message to display.
     * @param  int  $timeout  The timeout duration in milliseconds, defaults to `config('dytoast.default_timeout')` if not provided.
     */
    public function success(string $message, ?int $timeout = null): void
    {
        $this->flash($message, 'success', $timeout);
    }

    /**
     * Show an error toast.
     *
     * @param  string  $message  The message to display.
     * @param  int  $timeout  The timeout duration in milliseconds, defaults to `config('dytoast.default_timeout')` if not provided.
     */
    public function error(string $message, ?int $timeout = null): void
    {
        $this->flash($message, 'error', $timeout);
    }

    /**
     * Show a warning toast.
     *
     * @param  string  $message  The message to display.
     * @param  int  $timeout  The timeout duration in milliseconds, defaults to `config('dytoast.default_timeout')` if not provided.
     */
    public function warning(string $message, ?int $timeout = null): void
    {
        $this->flash($message, 'warning', $timeout);
    }

    /**
     * Show an info toast.
     *
     * @param  string  $message  The message to display.
     * @param  int  $timeout  The timeout duration in milliseconds, defaults to `config('dytoast.default_timeout')` if not provided.
     */
    public function info(string $message, ?int $timeout = null): void
    {
        $this->flash($message, 'info', $timeout);
    }

    /**
     * Flash the toast message to the session.
     *
     * @param  string  $message  The message to display.
     * @param  string  $type  The type of toast (success, error, warning, info).
     * @param  int|null  $timeout  The timeout duration in milliseconds (used config value if null).
     */
    private function flash(string $message, string $type, ?int $timeout): void
    {
        session()->flash('toast', [
            'message' => $message,
            'type' => $type,
            'timeout' => $timeout ?? config('dytoast.default_timeout', 5000),
        ]);
    }
}
