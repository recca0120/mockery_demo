<?php

namespace App\Http\Controllers;

use Acme\GoldHistory;
use Illuminate\Http\Request;

class GoldHistoryController extends Controller
{
    public function index(GoldHistory $goldHistory) 
    {
        return response()->json($goldHistory->get());
    }
}
