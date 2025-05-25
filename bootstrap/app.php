<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(function (Router $router) {
        require __DIR__.'/../routes/web.php';
        require __DIR__.'/../routes/api.php';
    })
    ->withCommands([
        __DIR__.'/../routes/console.php',
    ])
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => \App\Http\Middleware\CheckRole::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Secara default, Laravel akan gunakan App\Exceptions\Handler
        // Kalau kamu perlu override, bisa di sini
        // $exceptions->handler(\App\Exceptions\Handler::class);
    })
    ->create();
