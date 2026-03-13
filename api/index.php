<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $autoload = __DIR__ . '/../vendor/autoload.php';
    if (!file_exists($autoload)) {
        die("Autoload file not found at $autoload. Documentation says Vercel should run composer install automatically.");
    }
    require $autoload;

    $app_php = __DIR__ . '/../bootstrap/app.php';
    if (!file_exists($app_php)) {
        die("bootstrap/app.php not found at $app_php");
    }
    $app = require_once $app_php;

    $storagePath = '/tmp/storage';
    if (!is_dir("$storagePath/framework/views")) {
        mkdir("$storagePath/framework/views", 0777, true);
        mkdir("$storagePath/framework/cache", 0777, true);
        mkdir("$storagePath/framework/sessions", 0777, true);
        mkdir("$storagePath/logs", 0777, true);
    }
    $app->useStoragePath($storagePath);

    $app->handleRequest(Illuminate\Http\Request::capture());

} catch (\Throwable $e) {
    echo "<h1>Vercel Deployment Error</h1>";
    echo "<p><b>Message:</b> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><b>File:</b> " . $e->getFile() . " on line " . $e->getLine() . "</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
