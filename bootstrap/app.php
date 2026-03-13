<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->registered(function ($app) {
        if (isset($_SERVER['VERCEL_URL'])) {
            $storagePath = '/tmp/storage';
            if (!is_dir("$storagePath/framework/views")) {
                mkdir("$storagePath/framework/views", 0777, true);
                mkdir("$storagePath/framework/cache", 0777, true);
                mkdir("$storagePath/framework/sessions", 0777, true);
                mkdir("$storagePath/logs", 0777, true);
            }
            $app->useStoragePath($storagePath);
        }
    })
    ->booted(function ($app) {
        if (config('database.default') === 'sqlite' && config('database.connections.sqlite.database') === ':memory:') {
            try {
                \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
            } catch (\Exception $e) {
                // Ignore
            }
        }
    })
    ->create();
