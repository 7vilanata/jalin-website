<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryRawleague extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'title',
        'slug',
        'location',
        'street_loc',
        'content',
        'thumbnail',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'is_published',
        'image_date',
    ];
}
