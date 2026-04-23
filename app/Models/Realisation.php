<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    protected $fillable = [
        'titre',
        'sous_titre',
        'image_url',
        'ordre',
    ];
}
