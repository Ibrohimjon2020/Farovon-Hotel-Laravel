<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Client;
use App\Models\ClientComment;
use App\Models\Staff;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {
        // get All Room Types with Room
        $roomTypes = RoomType::with('room')->get();

        // get all services
        $services = Service::all();

        // get All Comments
        $comments = ClientComment::query()->with('client')->get();

        // get All Staff
        $staffs = Staff::all();

        // Count Clients
        $sumClients = Client::all()->count();

        return view('index', [
            'roomTypes' => $roomTypes,
            'services' => $services,
            'comments' => $comments,
            'staffs' => $staffs,
            'sumClients' => $sumClients
        ]);
    }

    public function setLocale($locale)
    {
        App::setLocale($locale);
        Session::put('locale', $locale);

       return redirect()->back();
    }
}
