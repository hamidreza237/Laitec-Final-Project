<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\GalleryValidation;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $index = Gallery::paginate(5);
        return view('admin.gallery.index', compact('index'));
    }


    public function create()
    {
        return view('admin.gallery.create');
    }


    public function store(GalleryValidation $request)
    {
        $store = new Gallery();
        $file = $request->file('image');
        if (!empty($file)) {
            $imgName = $file->getClientOriginalName();
            $imgPath = "Images/gallery/" . $imgName;
            if (file_exists($imgPath)) {
                $imgName = bin2hex(random_bytes(10)) . $imgName;
            }
            $file->move("Images/gallery", $imgName);
            $store->Image = $imgName;
        }
        $store->save();
        session()->flash('save', 'successfully saved!');
        return redirect()->route('gallery.create');
    }


    public function show($gallery)
    {
        $show = Gallery::findOrFail($gallery);
        return view('admin.gallery.showDetails', compact('show'));
    }


    public function edit($gallery)
    {
        $edit = Gallery::findOrFail($gallery);
        return view('admin.gallery.edit', compact('edit'));
    }


    public function update(Request $request, $gallery)
    {

        $update = Gallery::findOrFail($gallery);
        $file = $request->file('image');
        if (empty($file)) {
            $img = $update->Image;
            $update->Image = $img;
        } else {
            $oldImg = 'Images/gallery/' . $update->Image;
            unlink($oldImg);
            $newImgName = $file->getClientOriginalName();
            $ImgPath = 'Images/gallery/' . $newImgName;
            if (file_exists($ImgPath)) {
                $newImgName = bin2hex(random_bytes(10)) . $newImgName;
            }
            $file->move('Images/gallery', $newImgName);
            $update->Image = $newImgName;
        }
        $update->save();
        session()->flash('edit', 'the selected row successfully updated!');
        return redirect()->route('gallery.index');
    }


    public function destroy($gallery)
    {
        $delete = Gallery::findOrFail($gallery);
        $imgPath='Images/gallery/'.$delete->Image;
        Gallery::destroy($gallery);
        unlink($imgPath);
        session()->flash('delete', 'the selected row deleted!');
        return redirect()->route('gallery.index');
    }
}
