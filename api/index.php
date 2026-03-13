<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Prepare storage directories in /tmp (Vercel's only writable path)
$storagePath = '/tmp/storage';
$storageDirs = [
    "$storagePath/framework/views",
    "$storagePath/framework/cache",
    "$storagePath/framework/sessions",
    "$storagePath/logs",
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Ensure the compiled view path is set to /tmp
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");

// Override storage path
$app->useStoragePath($storagePath);

/**
 * Handle the request
 */
$request = Illuminate\Http\Request::capture();

// Boot the application to ensure facades and providers are ready
$app->boot();

// Run migrations for in-memory SQLite (only on Vercel)
if (env('DB_CONNECTION') === 'sqlite') {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    } catch (\Exception $e) {
        // Silently fail if migrate fails
    }
}

$app->handleRequest($request);
