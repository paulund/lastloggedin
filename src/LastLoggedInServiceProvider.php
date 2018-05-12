<?php

namespace Dappa\LastLoggedIn;

use Dappa\LastLoggedIn\Listeners\LoggedInListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class LastLoggedInServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Add listener
        Event::listen(Login::class, LoggedInListener::class);

        // Database Migrations
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
    }
}