<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;

class UrlsController extends Controller
{
    // logic for creating Url record in database
    // we get user_id from authenticated user
    // we only accept full_body as param, then create shortened_body from it
    public function store(Request $request)
    {
        // $attributes = $request()->validate([
        //     'full_body' => ['required', 'min:3', 'max:255']
        // ]);

        $url = new Url();

        $shortened = $url->shortenUrl($request['full_body']);

        // TODO: Couldn't manage to avoid the error saying:
        // Field &#039;shortened_body&#039; doesn&#039;t have a default value
        // (check first commit)
        // This issue took me about an hour of 3 hour time, else I would finish this endpoint by creating an url
        // and assigning user_id from Auth object of course instead hardcoding it like below
        $url->full_body = $request['full_body'];
        $url->shortened_body = $shortened;
        $url->user_id = 1;

        $url->save();

        return response()->json($url, 201);
    }

}
