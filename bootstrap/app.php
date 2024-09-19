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
            'isLoggedIn' => \App\Http\Middleware\AuthCheck::class,
            'alreadyLoggedIn' => \App\Http\Middleware\AlreadyLoggedIn::class,
            'applicantAlreadyLoggedIn' => \App\Http\Middleware\ApplicantIsLoggedIn::class,
            'applicantIsLoggedIn' => \App\Http\Middleware\ApplicantAuthCheck::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
