# Release Notes

## [v1.0.2]() - (2025-03-25)

* Added support for custom toast positions (top-right, top-left, bottom-right, bottom-left).
* Added timeout customization, allowing users to specify how long the toast stays visible.
* Improved animation handling, ensuring smooth transitions for different positions.

## [v1.0.1]() - (2025-03-22)

* Laravel Facade (Toast::success($message), Toast::error($message), etc.) for easy usage.

## [v1.0.0]() - (2025-03-21)

* Initial release of DyToast, a simple and customizable toast notification system for Laravel.
* Provides a Blade component (<x-dy-toast />) for displaying toast messages.
* Includes a JavaScript helper (toast()) for triggering notifications from the frontend.
* Supports session-based toasts, allowing messages to be flashed from the backend.