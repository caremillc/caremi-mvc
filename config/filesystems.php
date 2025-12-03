<?php declare(strict_types=1);

return [
    'default' => 'local',
    'disks' => [
        'local' => [
            'root' => storage_path('app'),
        ],
        'public' => [
            'root' => storage_path('app/public'),
            'url'  => env('APP_URL', '') . '/storage',
        ],
        // Add S3 or other disks here as needed in future
    ],
];
