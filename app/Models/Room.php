<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => 'array',
        'title' => 'array',
        'have' => 'array',
        'short_content' => 'array',
        'content' => 'array',
        'images' => 'array',
    ];

    public static $rules = [

        "price" => "array|required",
        "title" => "array|required",
        'rate' => 'integer|required',
        'have' => 'array|required',
        'short_content' => 'array|required',
        'content' => 'array|required',
        'room_type_id' => 'integer|required',
        'images' => 'array|required',

    ];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'id', 'room_type_id');
    }
}
