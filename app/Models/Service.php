<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'logo'];

    protected $casts = [
        'title' => 'array',
        'content' => 'array'
    ];

    public static $rules = [

        "title" => "array|required",
        "content" => "array|required"

    ];
}
