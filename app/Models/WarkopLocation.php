<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarkopLocation extends Model
{

     use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'thumbnail',
        'street_loc',
        'loc_link',
        'is_published',
        'x',
        'y',
        'type_hub',
    ];
}
