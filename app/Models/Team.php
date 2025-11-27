<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['tournament_id', 'name', 'points', 'position', 'is_published', 'is_eliminated','logo_image'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
