<?php

/**
 * Основные настройки
 */
$db = require __DIR__ . '/local_db.php';

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'db' => $db,
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
