<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $fillable = [
        'title', 'logo_url'
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }
}
