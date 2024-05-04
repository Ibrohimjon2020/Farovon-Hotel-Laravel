<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientComment;

class ClientCommentController extends Controller
{
    // public function index()
    // {
    //     $client = Client::with('comment')->get();
    //     return view('client.index', [
    //         'client' => $client,
    //     ]);
    // }

    public function update(ClientComment $comment)
    {
        $comment->is_active = $comment->is_active == 1 ? 0 : 1;
        $comment->save();
        return redirect()->back();
    }
}
