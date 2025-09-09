<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
     use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'title',
        'embed_link',
        'is_published',
        'publish_date',
    ];
}
