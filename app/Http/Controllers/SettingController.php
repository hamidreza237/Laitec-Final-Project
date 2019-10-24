<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingValidation;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $index = Setting::paginate(3);

        return view('admin.setting.index', compact('index'));
    }


    public function create()
    {
        return view('admin.setting.create');
    }


    public function store(SettingValidation $request)
    {
        $store = new Setting();
        $store->Title = $request->title;
        $store->Description = $request->desc;
        $store->Author = $request->author;
        $store->Keywords = $request->key;
        $store->save();
        session()->flash('save', 'successfully saved!');
        return redirect()->route('setting.create');
    }


    public function show($setting)
    {
        $show=Setting::findOrFail($setting);
        return view('admin.setting.showDetails',compact('show'));
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
        session()->flash('delete','the selected row deleted!');
        return redirect()->route('setting.index');
    }

}
