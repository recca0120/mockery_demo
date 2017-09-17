<?php

namespace App\Http\Controllers;

use Acme\GoldHistory;
use Illuminate\Http\Request;
use App\GoldHistory as Model;

class GoldHistoryController extends Controller
{
    public function index(Model $model, GoldHistory $goldHistory) 
    {

        return response()->json(array_map(function($attributes) use ($model) {
            return $model->updateOrCreate([
                'date' => $attributes['date']
            ], $attributes);
        }, $goldHistory->get()));
    }
}
