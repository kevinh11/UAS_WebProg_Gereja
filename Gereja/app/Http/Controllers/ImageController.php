<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Intervention\Image\Image as InterventionImage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Encoders\AutoEncoder;
class ImageController extends Controller
{
    private $images = [];

    function read() {
        $this->images = Image::all()->toArray();
    }

    function edit($id, Request $req) {

        $image = Image::find($id);
        $img = $req->file('gambar');
        $img_name = $img->getClientOriginalName();

        $path = $req->input('path');
        $desc = $req->input('desc');

        if ($this->verify_ext($img_name) && $img->isValid()) {
            $manager = ImageManager::withDriver(new Driver());
            $image->img = $this->compressImage($img);
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

        $img = $req->file('gambar');
        $desc = $req->input('desc');
        $img_name = $img->getClientOriginalName();
        $manager = new ImageManager(new Driver());
        $image = $manager->read($img);

        $compressedImageData = $this->compressImage($image);

        if ($this->verify_ext($img_name) && $img->isValid()) {
           Image::create([
                'img'=>$compressedImageData,
                'desc'=>$desc
            ]);
            return redirect('admin-dashboard');
        }
        else {
            return redirect()->back()->with('success', 'Gambar tidak bisa di save. Pastikan file berupa gambar');
        }
        

    }

    function compressImage($image) {
        $manager = new ImageManager(new Driver());
        $compressedImage = $manager->read($image);
        $compressedImageData = $compressedImage->toJpeg(90);

        return $compressedImageData;
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
