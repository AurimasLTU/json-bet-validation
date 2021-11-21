<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    protected $table = 'bets';

    protected $fillable = ['stake_amount', 'player_id'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function betSelections()
    {
        return $this->hasMany(BetSelections::class);
    }
}
