<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceTrasaction extends Model
{
    protected $table = 'balance_transactions';

    protected $fillable = [
        'player_id',
        'amount',
        'amount_before'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
