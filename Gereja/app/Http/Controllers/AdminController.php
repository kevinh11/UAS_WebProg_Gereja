<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Models\Event;
use App\Models\Image;



class AdminController extends Controller
{
    
    private $event_data = [];
    private $img_data = [];

    function assemble_data() {
        $events = Event::all()->toArray();
        $this->event_data = $events;

        $pics = Image::all()->toArray();
        $this->img_data = $pics;
    }

    function index() {
        $this->assemble_data();
        return view('pages.admin', ['events'=> $this->event_data, 'images'=> $this->img_data]);
    }



    
}
