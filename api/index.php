<?php

// Cache bust: 2026-03-13 18:45
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Prepare writable storage
$storagePath = '/tmp/storage';
foreach (['/tmp/storage/framework/views', '/tmp/storage/framework/cache', '/tmp/storage/framework/sessions', '/tmp/storage/logs'] as $dir) {
    if (!is_dir($dir)) mkdir($dir, 0777, true);
}

$app->useStoragePath($storagePath);

$app->handleRequest(Illuminate\Http\Request::capture());
