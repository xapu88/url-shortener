<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = ['full_body'];

    public function shortenUrl($body) {
        return str_replace('http://', '', $body);
    }
}
