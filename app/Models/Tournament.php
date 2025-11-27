<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = ['name', 'slug', 'game', 'chart_image', 'is_published'];

    public function teams()
    {
        return $this->hasMany(Team::class)->orderBy('position')->orderByDesc('points');
    }
}
