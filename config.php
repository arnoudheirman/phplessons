<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/02/2017
 * Time: 11:42
 */

return[
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];