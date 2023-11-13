<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index() 
    {
        return view ('food.all', [
            "title" => "Foods",
            "foods" => Food::all(),
        ]);
    }

    public function show($food)
    {
        return view ('food.detail', [
            "title" => "detail-food",
            "food" => Food::find($food),
        ]);
    }
}
