<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'type_hub',
        'location',
        'street_loc',
        'loc_link',
        'content',
        'thumbnail',
        'schedule_date',
        'start_time',
        'lat',
        'lng',
        'is_published',
    ];
}
