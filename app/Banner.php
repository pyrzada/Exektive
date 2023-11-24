<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'heading',
        'description',
        'button_text',
        'image_path',
    ];
}
