<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorAndPresenter extends Model
{
    use HasFactory;

    // Define which fields can be mass-assigned
    protected $fillable = [
        'name',
        'logo',
        'role',
        'is_published',
    ];
}
