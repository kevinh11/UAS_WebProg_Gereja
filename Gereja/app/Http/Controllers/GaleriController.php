<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    function index(){
        return view('pages.galeri');
    }
}
