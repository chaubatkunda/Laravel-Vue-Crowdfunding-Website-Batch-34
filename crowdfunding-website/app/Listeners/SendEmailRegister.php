<?php

namespace App\Listeners;

use App\Events\UserRegisterEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailRegister
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegisterEvent  $event
     * @return void
     */
    public function handle(UserRegisterEvent $event)
    {
        //
    }
}
