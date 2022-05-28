<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){

        $trains = Train::all();

        return view('trains', compact ('trains'));
    }

    public function show($id){
        $train = Train::findOrFail($id);
        return view('show', compact('train'));
    }
}
