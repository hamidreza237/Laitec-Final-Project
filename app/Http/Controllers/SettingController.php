<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $index=Setting::paginate(3);

        return view('admin.slider.index',compact('index'));
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {
        $store = new Setting();
        $store->Title = $request->title;
        $store->Description = $request->desc;
        $store->Author = $request->author;
        $store->Keywords = $request->key;
        $store->save();
        return redirect()->route('setting.create');
    }


    public function show(Setting $setting)
    {
        //
    }


    public function edit(Setting $setting)
    {
        //
    }


    public function update(Request $request, Setting $setting)
    {
        //
    }


    public function destroy($setting)
    {
       Setting::destroy($setting);
       return redirect()->route('setting.index');
    }

}
