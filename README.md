# dy-toast

A simple toast notification package for Laravel.
## Installation

Install the package using Composer:

```bash
composer require hafizulislamhfz/dy-toast
```

After installed, publish the toast component:

```bash
php artisan vendor:publish --tag=toast
```

Modify Your app.blade.php (or Main Layout)
In the main layout file (resources/views/layouts/app.blade.php), add this before ```</body>```

```bash
<!DOCTYPE html>
<html lang="en">
<head>
    {{-- head --}}
</head>
<body>
    {{-- body --}}

    @include('components.dy-toast.toast')
</body>
</html>
```

## Usage

### Trigger Toast Notifications

Use the toast in controllers or anywhere within Laravel:

```php
use Hafizulislamhfz\DyToast\Facades\Toast;

// Display a success message
Toast::success('Operation completed successfully!');
toast('Operation completed successfully!');

// Display an error message
Toast::error('Something went wrong!');
toast('Something went wrong!', 'error');

// Display a warning message
Toast::warning('This is a warning!');
toast('This is a warning!', 'warning');

// Display an info message
Toast::info('Some useful information here!');
toast('Some useful information here!', 'info');

```

Use the toast in script:

```js
<script>
    // Display a success message
    toast('Operation completed successfully!');

    // Display an error message
    toast('Something went wrong!', 'error');

    // Display a warning message
    toast('This is a warning!', 'warning');

    // Display an info message
    toast('Some useful information here!', 'info');
</script>
```

## License

This package is open-source software licensed under the [MIT license](LICENSE).
