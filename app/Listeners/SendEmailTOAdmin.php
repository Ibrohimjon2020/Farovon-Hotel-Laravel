<?php

namespace App\Listeners;

use App\Events\StaffCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendEmailTOAdmin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StaffCreated $event): void
    {
        Log::alert('This is Event and Listeners resuluts Staff Created '. $event->staff->phone);
    }
}
