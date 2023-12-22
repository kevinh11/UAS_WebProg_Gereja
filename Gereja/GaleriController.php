<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class GaleriController extends Controller
{
    function index(){
        $this->read();
        return view('pages.galeri', ['galeri'=>$this->galeri]);
    }

    public $galeri = [];

    function read(){
        $this->galeri = Image::all();
    }

}
