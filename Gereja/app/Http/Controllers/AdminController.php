<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Models\Event;


class AdminController extends Controller
{
    
    private $event_data = [];

    function assemble_data() {
        $events = Event::all()->toArray();
        foreach($events as $e) {
            array_push($this->event_data, $e);
        }
    }

    function index() {
        $this->assemble_data();
        return view('pages.admin', ['events'=> $this->event_data]);
    }



    
}
