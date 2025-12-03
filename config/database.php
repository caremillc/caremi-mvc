<?php declare(strict_types=1);
return [
    'driver'  => 'sqlite',

    'drivers' => [

        'sqlite' => [
            'engine'     => 'sqlite',
            'path'       => base_path('storage/database/database.sqlite'),
            'FETCH_MODE' => PDO::FETCH_OBJ,
            'ERRMODE'    => PDO::ATTR_ERRMODE,
            'EXCEPTION'  => PDO::ERRMODE_EXCEPTION,
        ],
        
        'mysql'  => [
            'engine'     => 'mysql',
            'database'   => 'project',
            'username'   => 'root',
            'password'   => '',
            'port'       => 3306,
            'charset'    => 'utf8mb4',
            'host'       => '127.0.0.1',
            'FETCH_MODE' => PDO::FETCH_OBJ,
            'ERRMODE'    => PDO::ATTR_ERRMODE,
            'EXCEPTION'  => PDO::ERRMODE_EXCEPTION,
        ],

    ],
];
