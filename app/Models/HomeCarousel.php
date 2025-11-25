<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCarousel extends Model
{
     protected $fillable = [
        'type_event',
        'big_title',
        'side_title',
        'image_path',
        'is_published',
        'sort_order',
    ];
}
