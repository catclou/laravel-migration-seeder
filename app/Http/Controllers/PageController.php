<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view( 'home' );
    }

    public function aboutUs(){
        return view( 'aboutUs' );
    }

    public function contacts(){
        return view( 'contacts' );
    }

    public function trains(){
        return view( 'trains' );
    }
}
