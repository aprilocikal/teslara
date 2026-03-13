<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Create necessary storage directories in /tmp because Vercel filesystem is read-only
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Overwrite the storage path to /tmp
$app->useStoragePath('/tmp/storage');

// Handle the request
$app->handleRequest(Illuminate\Http\Request::capture());
