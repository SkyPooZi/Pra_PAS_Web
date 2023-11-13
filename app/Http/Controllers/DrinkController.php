<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index() 
    {
        return view ('drink.all', [
            "title" => "Drinks",
            "drinks" => Drink::all(),
        ]);
    }

    public function show($drink)
    {
        return view ('drink.detail', [
            "title" => "detail-drink",
            "drink" => Drink::find($drink),
        ]);
    }
}
