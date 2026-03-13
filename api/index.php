<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Set storage path to /tmp for Vercel's read-only environment
$app->useStoragePath('/tmp/storage');

// Handle the request
$request = Illuminate\Http\Request::capture();
$app->handleRequest($request);
