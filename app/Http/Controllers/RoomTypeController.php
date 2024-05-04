<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class RoomTypeController extends Controller
{
    public function index()
    {
        // get All Room Types with Room

        $roomTypes = RoomType::with('room')->get();
        
        // foreach($roomTypes as $room)
        // {
        //     echo $room->name['en']. "<br>";
        //     echo $room->room->price['en']. "<br>";

        // }

        // return view('rooms.index', [
        //     'roomTypes' => $roomTypes,
        // ]);
    }
}
