<?php

namespace Paulund\LastLoggedIn\Listeners;

use Carbon\Carbon;
use Illuminate\Auth\Events\Login;

class LoggedInListener
{
    /**
     * Handle the event.
     *
     * @param Login $event
     * @return void
     */
    public function handle(Login $event)
    {
        $event->user->last_logged_in = Carbon::now();
        $event->user->save();
    }
}
