<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = ['full_body'];

    public function shortenUrl($body) {
        $shortened_body = str_replace('http://', '', $body);
        $shortened_body = str_replace('https://', '', $shortened_body);
        return $shortened_body;
    }
}
