<?php

declare(strict_types=1);

namespace Hafizulislamhfz\DyToast;

class ToastManager
{
    public function success(string $message, int $timeout = 5000): void
    {
        $this->flash($message, 'success', $timeout);
    }

    public function error(string $message, int $timeout = 5000): void
    {
        $this->flash($message, 'error', $timeout);
    }

    public function warning(string $message, int $timeout = 5000): void
    {
        $this->flash($message, 'warning', $timeout);
    }

    public function info(string $message, int $timeout = 5000): void
    {
        $this->flash($message, 'info', $timeout);
    }

    private function flash(string $message, string $type, int $timeout): void
    {
        session()->flash('toast', [
            'message' => $message,
            'type' => $type,
            'timeout' => $timeout,
        ]);
    }
}
