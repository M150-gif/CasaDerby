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
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "admin_equipe_rca"=>\App\Http\Middleware\admin_equipe_rca::class,
            "admin_equipe_wac"=>\App\Http\Middleware\admin_equipe_wac::class,
            "admin_store"=>\App\Http\Middleware\admin_store::class,
            "client"=>\App\Http\Middleware\client::class,
            "guest"=>\App\Http\Middleware\guest::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
