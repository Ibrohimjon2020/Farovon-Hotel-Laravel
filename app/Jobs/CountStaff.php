<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Staff;
use Illuminate\Support\Facades\Log;

class CountStaff implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $staff;
    /**
     * Create a new job instance.
     */
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $getAllStaffs = Staff::all()->count();
        Log::alert('Queue Worker\'s results All Staffs Count '. $getAllStaffs);
        
    }
}
