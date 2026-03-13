<?php

// Force Load indispensable providers for Vercel
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // Prepare writable storage
    $storagePath = '/tmp/storage';
    @mkdir($storagePath . '/bootstrap', 0777, true);
    @mkdir($storagePath . '/framework/views', 0777, true);
    @mkdir($storagePath . '/framework/cache', 0777, true);
    @mkdir($storagePath . '/framework/sessions', 0777, true);
    @mkdir($storagePath . '/logs', 0777, true);

    $app->useStoragePath($storagePath);

    $app->handleRequest(Illuminate\Http\Request::capture());

} catch (\Throwable $e) {
    echo "<h1>Vercel Deployment Error</h1>";
    echo "<p><b>Message:</b> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><b>File:</b> " . $e->getFile() . " on line " . $e->getLine() . "</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
