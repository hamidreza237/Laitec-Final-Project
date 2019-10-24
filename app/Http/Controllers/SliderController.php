<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderValidation;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $index = Slider::paginate(5);
        return view('admin.slider.index', compact('index'));
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(SliderValidation $request)
    {
        $store = new Slider();
        $store->Caption = $request->caption;
        $store->alt = $request->alter;
        $file = $request->file('image');
        if (!empty($file)) {
            $imgName = $file->getClientOriginalName();
            $imgPath = "Images/slider/" . $imgName;
            if (file_exists($imgPath)) {
                $imgName = bin2hex(random_bytes(10)) . $imgName;
            }
            $file->move("Images/slider", $imgName);
            $store->Image = $imgName;
        }
        $store->save();
        session()->flash('save', 'successfully saved!');
        return redirect()->route('slider.create');

    }


    public function show($slider)
    {
        $show = Slider::findOrFail($slider);
        return view('admin.slider.showDetails', compact('show'));
    }


    public function edit($slider)
    {
        $edit = Slider::findOrFail($slider);
        return view('admin.slider.edit', compact('edit'));
    }


    public function update(Request $request, $slider)
    {
        $update = Slider::findOrFail($slider);
        $update->Caption = $request->caption;
        $update->alt = $request->alter;
        $file = $request->file('image');
        if (empty($file)) {
            $img = $update->Image;
            $update->Image = $img;
        } else {
            $oldImg = 'Images/slider/' . $update->Image;
            unlink($oldImg);
            $newImgName = $file->getClientOriginalName();
            $ImgPath = 'Images/slider/' . $newImgName;
            if (file_exists($ImgPath)) {
                $newImgName = bin2hex(random_bytes(10)) . $newImgName;
            }
            $file->move('Images/slider', $newImgName);
            $update->Image = $newImgName;
        }
        $update->save();
        session()->flash('edit', 'the selected row successfully updated!');
        return redirect()->route('slider.index');
    }


    public function destroy($slider)
    {
        $delete = Slider::findOrFail($slider);
        $imgPath='Images/slider/'.$delete->Image;
        Slider::destroy($slider);
        unlink($imgPath);
        session()->flash('delete', 'the selected row deleted!');
        return redirect()->route('slider.index');
    }
}
