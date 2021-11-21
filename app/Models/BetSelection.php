<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetSelection extends Model
{
    protected $table = 'bet_selections';

    protected $fillable = ['bet_id', 'odds', 'selection_id'];

    public function bet()
    {
        return $this->belongsTo(Bet::class);
    }
}
