<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    private $images = [];

    function read() {
        $this->images = Image::all()->toArray();
    }

    function edit($id, Request $req) {

        $image = Image::find($id);
        $img = $req->file('img');
        $img_name = $img->getClientOriginalName();

        $path = $req->input('path');
        $desc = $req->input('desc');

        if ($this->verify_ext($img_name) && $img->isValid()) {
            $manager = new ImageManager(new Driver());

        

            $image->img = $img;
            $image->path = $path;
            $image->desc = $desc;
            $image->save();
            return redirect('admin-dashboard');
        }

        else {
            return redirect()->back()->with('success', 'Gambar tidak bisa di save. Pastikan file berupa gambar');
        }
        
    }

    function delete($id) {
        Image::find($id)->delete();
        return redirect('admin-dashboard');
    }


    function verify_ext($file_name) {
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);

        switch($ext) {
            case 'gif':
            case 'png':
            case 'jpg':
            case 'jpeg':
            case 'svg':
                return true;
            default:
                return false;
        }
    }

    function create(Request $req) {

        $img = Image::make($req->file('gambar'));
        $desc = $req->input('desc');
        $img_name = $img->getClientOriginalName();

        $compressedImageData = $this->compressImage($img);

        if ($this->verify_ext($img_name) && $img->isValid()) {

            $manager = new ImageManager(new Driver());

            Image::create([
                'img'=>file_get_contents($compressedImageData->getRealPath()),
                'desc'=>$desc
            ]);
            return redirect('admin-dashboard');
        }
        else {
            return redirect()->back()->with('success', 'Gambar tidak bisa di save. Pastikan file berupa gambar');
        }
        

    }

    function display_edit_view($id) {
        $currImage = Image::find($id)->toArray();
        return view('pages.admin_form.edit_image', ['image'=> $currImage]);
    }

    function display_create_view() {
        return view('pages.admin_form.add_image');
    }
    function index() {
        $this->read();
        return view('pages.galeri', ['images'=>$this->images]);

    }
}
