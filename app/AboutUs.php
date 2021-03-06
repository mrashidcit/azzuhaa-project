<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'about_uses';
    protected $fillable = [
        'mission', 'history',
        'other_description'
    ];
}
