<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhoWeAre extends Model
{
    protected $fillable = [
        'heading',
        'description',
        'image_path',
    ];
}
