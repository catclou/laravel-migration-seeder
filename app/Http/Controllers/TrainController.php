<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Train;

class TrainController extends Controller
{
    public function index(){

        // ATTENZIONE! NON MI TROVA QUESTO MODEL TRAIN, NONOSTANTE ESISTA
        $trains = Train::all();

        return view('trains', compact ('trains'));
    }
}
