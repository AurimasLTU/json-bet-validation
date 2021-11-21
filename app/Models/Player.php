<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'balance'
    ];

    public function balance_transactions()
    {
        return $this->hasMany(BalanceTransaction::class);
    }

    public function bets()
    {
        return $this->hasMany(Bet::class);
    }
}
