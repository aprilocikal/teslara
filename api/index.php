<?php

// Ultimate Vercel Debug Bridge
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    require __DIR__ . '/../vendor/autoload.php';
    
    /** @var \Illuminate\Foundation\Application $app */
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // Set up writable storage for the serverless environment
    $storagePath = '/tmp/storage';
    $neededDirs = [
        $storagePath . '/framework/views',
        $storagePath . '/framework/cache',
        $storagePath . '/framework/sessions',
        $storagePath . '/logs',
    ];

    foreach ($neededDirs as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    $app->useStoragePath($storagePath);

    // Auto-migrate in-memory database
    if (config('database.default') === 'sqlite' && config('database.connections.sqlite.database') === ':memory:') {
       $app->booted(function() {
           \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
       });
    }

    // Handle the request
    $request = \Illuminate\Http\Request::capture();
    $app->handleRequest($request);

} catch (\Throwable $e) {
    echo "<div style='background: #fee; padding: 20px; border: 1px solid #f99; font-family: sans-serif;'>";
    echo "<h1 style='color: #900;'>Deployment Error</h1>";
    echo "<p><b>Message:</b> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><b>File:</b> " . $e->getFile() . " on line " . $e->getLine() . "</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre style='background: #fff; padding: 10px; overflow: auto;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</div>";
}
