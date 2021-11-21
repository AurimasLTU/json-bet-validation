<?php

namespace App\Http\Controllers;

use App\Models\BetSelection;

class BetSelectionsController
{
    function create($betId, $odds, $selectionId)
    {
        $betSelections = new BetSelection();
        $betSelections->bet_id = $betId;
        $betSelections->selection_id = $selectionId;
        $betSelections->odds = $odds;
        $betSelections->save();

        return $betSelections;
    }
}
