<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public $events = [];

    function read() {
        $this->events = Event::all();
    }

    function update($id) {

    }

    function delete() {
        
    }

    function create(Request $req) {

        $data = $req->request->all();

        $judul = $data['judul'];
        $tanggal = $data['tanggal'];
        $waktu = $data['jam'];

        Event::create([
            'event_title'=>$judul,
            'event_date'=> $tanggal,
            'event_time'=> $waktu
        ]);


        return redirect('/admin-dashboard')

        
    }
    function display_edit_view() {

    }

    function display_create_view() {
        return view('pages.admin_form.create_event');
    }
    function index() {
        $this->read();
        return view('pages.jadwal', ['events'=>$this->events]);

    }
}
