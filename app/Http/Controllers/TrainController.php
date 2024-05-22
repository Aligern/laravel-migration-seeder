<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use A3pp\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        //dd($trains);
        return view('home', compact('trains'));
    }
    //
}
