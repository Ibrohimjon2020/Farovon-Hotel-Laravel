<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class RouteController extends Controller
{
    public function route($route)
    {
        return view()->exists($route) ? view($route) : abort(404);
    }
}
