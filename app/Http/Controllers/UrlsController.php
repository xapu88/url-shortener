<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Url;
use App\User;

class UrlsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    // logic for creating Url record in database
    // we get user_id from authenticated user
    // we only accept full_body as param, then create shortened_body from it
    public function store(Request $request, User $user)
    {
        // $attributes = $request()->validate([
        //     'full_body' => ['required', 'min:3', 'max:255']
        // ]);

        if($user->id == auth()->id()) {
            $url = $user->addUrl($request['full_body']);
            return response()->json($url, 201);
        } else {
            return response()->json('Unauthorized', 401);
        }
        
        
    }

}
