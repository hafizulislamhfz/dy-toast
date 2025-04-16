<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Position of the DyToast
    |--------------------------------------------------------------------------
    |
    | This option defines where the DyToast notification will be positioned
    | on the screen. You can set it to values like 'center', 'top-center',
    | 'top-left', 'top-right', 'bottom-center', 'bottom-right', 'bottom-left'
    | to customize its position.
    |
    */

    'position' => 'top-right',

    /*
    |--------------------------------------------------------------------------
    | Default Timeout Duration
    |--------------------------------------------------------------------------
    |
    | This option sets the default timeout duration (in milliseconds) for
    | the DyToast notification. By default, it will automatically disappear
    | after the specified duration. You can adjust this value as needed.
    |
    | Default: 5000 (5 seconds)
    |
    */

    'default_timeout' => 5000,

    /*
    |--------------------------------------------------------------------------
    | Has Customization
    |--------------------------------------------------------------------------
    |
    | This boolean flag indicates whether the user has modified any of the
    | published package files. It helps prevent overwriting customized files
    | during future updates of the package. If set to `true`, the package
    | will avoid force-publishing changes to any files.
    |
    */

    'has_modified' => false,
];
