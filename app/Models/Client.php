<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;


    public function comments(): HasMany
    {
        return $this->hasMany(ClientComment::class);
    
    }

    public function bookRoom(): HasMany
    {
        return $this->hasMany(BookRoom::class);
    }
}
