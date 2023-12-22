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
    public $preview = [];

    function read(){
        $this->galeri = Image::all()->toArray();
    
    }
    
    
    function preview() {
        $this->read();
        
        if (count($this->galeri) > 6) {
            $this->preview = array_splice($this->galeri, -1,6);
        }
        
        else {
            $this->preview = $this->galeri;
        }
        
        
        
    }

}
