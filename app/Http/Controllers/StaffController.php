<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Events\StaffCreated;
use App\Jobs\CountStaff;
use Illuminate\Support\Facades\Mail;
use App\Mail\StaffCreated as MailStaffCreated;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Notifications\StaffCreated as NotificationsStaffCreated;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendNotification;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index', [
            'staffs' => $staffs,
        ]);
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->firstname = $request->firstname;
        $staff->lastname = $request->lastname;
        $staff->phone = $request->phone;
        $path = $request->file('image')->store('staffs');
        $staff->image = $path;
        $staff->save();

        StaffCreated::dispatch($staff);

        // Count All Staffs in Queue Jobs
        CountStaff::dispatch($staff);
        // Mail::send('')
        // Send Email to Admin
        //     $a = Mail::to($request->user())->send(new MailStaffCreated($staff));
        // if($a)
        //     Log::Alert('Email jonatildi');
        // Log::Alert('Email ishlamadi');
        // Mail::send(new MailStaffCreated($staff));
        // Mail::send('mails.staffCreated', $staff, 'local');
        $users = User::all();
        // send Notification to All Users in Database
        // Notification::send($users, new NotificationsStaffCreated($staff));

        // send Notification to telegram Channel
        Notification::send($users, new SendNotification($staff));

        
        return redirect('/');
    }
}
