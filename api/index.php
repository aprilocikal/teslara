<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Prepare storage
$storagePath = '/tmp/storage';
if (!is_dir("$storagePath/framework/views")) {
    mkdir("$storagePath/framework/views", 0777, true);
    mkdir("$storagePath/framework/cache", 0777, true);
    mkdir("$storagePath/framework/sessions", 0777, true);
    mkdir("$storagePath/logs", 0777, true);
}

$app->useStoragePath($storagePath);

$app->handleRequest(Illuminate\Http\Request::capture());
