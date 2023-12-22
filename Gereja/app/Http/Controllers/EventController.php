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

    function edit($id, Request $req) {

        $event = Event::find($id);
        $judul = $req->input('judul');
        $waktu = $req->input('jam');
        $tanggal = $req->input('tanggal');

        $event->event_date = $tanggal;
        $event->event_time = $waktu;
        $event->event_title = $judul;

        $event->save();
        return redirect('admin-dashboard');
    }

    function delete($id) {
        Event::find($id)->delete();
        return redirect('admin-dashboard');
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
        
        return redirect('admin-dashboard');

    }


    function display_edit_view($id) {
        $currEvent = Event::find($id)->toArray();
        return view('pages.admin_form.edit_event', ['event'=> $currEvent]);
    }

    function display_create_view() {
        return view('pages.admin_form.create_event');
    }
    function index() {
        //dd('Reached here!');
        $this->read();
        return view('pages.jadwal', ['events'=>$this->events]);

    }
}
