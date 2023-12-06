<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public $announcements = [];

    public function read()
    {
        $this->announcements = Announcement::all()->toArray();
        // dd($this->announcements);


        return response()->json(['announcement'=>$this->announcements]);
    }

    public function edit($id, Request $req)
    {
        $announcement = Announcement::find($id);
        $announcementText = $req->input('announcement');

        $announcement->update([
            'announcement' => $announcementText,
        ]);

        return redirect('/admin-dashboard');
    }

    public function delete($id)
    {
        Announcement::find($id)->delete();
        return redirect('/admin-dashboard');
    }

    public function create(Request $req)
    {
    $this->validate($req, [
        'announcement' => 'required|string', 
    ]);

    $announcementText = $req->input('announcement');

    Announcement::create([
        'announcement' => $announcementText,
    ]);

    return redirect('/admin-dashboard');
    }

    public function display_edit_view($id)
    {
        $currAnnouncement = Announcement::find($id)->toArray();
        return view('pages.admin_form.edit_announcements', ['announcement' => $currAnnouncement]);
    }

    public function display_create_view()
    {
        return view('pages.admin_form.create_announcements');
    }

    public function index()
    {

    }
}
