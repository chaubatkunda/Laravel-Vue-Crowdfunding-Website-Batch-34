<?php

namespace App\Listeners;

use App\Events\UserRegisterEvent;
use App\Mail\UserRegisterMail;
use App\OtpCode;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailRegister
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    // public $otp;
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  UserRegisterEvent  $event
     * @return void
     */
    public function handle(UserRegisterEvent $event)
    {
        Mail::to($event->otp->user)->send(new UserRegisterMail($event->otp));
    }
}
