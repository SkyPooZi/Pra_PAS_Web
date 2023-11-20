<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function index() 
    {
        return view ('snack.all', [
            "title" => "Snacks",
            "snacks" => Snack::all(),
        ]);
    }

    public function show($snack)
    {
        return view ('snack.detail', [
            "title" => "detail-snack",
            "snack" => Snack::find($snack),
        ]);
    }
}
