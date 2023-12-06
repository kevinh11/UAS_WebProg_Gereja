<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Models\Event;
use App\Models\Image;
use App\Models\Announcement;



class AdminController extends Controller
{
    
    private $event_data = [];
    private $img_data = [];
    private $announcement_data = [];

    function assemble_data() {
        $events = Event::all()->toArray();
        $this->event_data = $events;

        $pics = Image::all()->toArray();
        $this->img_data = $pics;

        $announcements = Announcement::all()->toArray();
        $this->announcement_data = $announcements;
    }

    function index() {
        $this->assemble_data();
        return view('pages.admin', ['events'=> $this->event_data, 'images'=> $this->img_data, 'announcements'=> $this->announcement_data]);
    }



    
}
