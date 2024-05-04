<?php

namespace App\Http\Controllers;

use App\Models\BookRoom;
use App\Models\Client;
use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    public function index(){

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'firstname' =>'required',
            'lastname' =>'required',
            'phone' =>'required',
            'email' =>'required',
            'check_in' =>'required',
            'check_out' =>'required',
            'room_type' =>'required',
            'adults' =>'required',
            'children' =>'required',
            'infants' =>'required',
        ]);
    }
    public function show(Client $client)
    {
        return view('clients.show');
    }
}
