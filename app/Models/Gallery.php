<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
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
        'is_published',
        'image_date',
    ];
}
