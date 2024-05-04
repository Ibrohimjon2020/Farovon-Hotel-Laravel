<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RoomType extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => 'array',
    ];

    public static $rules = [
        "title" => "array|required",
        "number_of_beds" => "integer|required"
    ];

    public function room()
    {
        return $this->hasOne(Room::class, 'room_type_id', 'id');
    }

    public function bookRoom(): HasMany
    {
        return $this->hasMany(BookRoom::class);
    }
}
