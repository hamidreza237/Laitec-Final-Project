<?php

namespace App\Http\Controllers;

use App\About;
use App\Http\Requests\AboutValidation;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $index=About::paginate();
        return view('admin.about.index',compact('index'));
    }


    public function create()
    {
        return view('admin.about.create');
    }


    public function store(AboutValidation $request)
    {
        $store=new About();
        $store->Content=$request->cont;
        $store->FontSize=$request->font;
        $store->Color=$request->color;
        $store->save();
        session()->flash('save', 'successfully saved!');
        return redirect()->route('about.create');
    }


    public function show($about)
    {
        $show=About::findOrFail($about);
        return view('admin.about.showDetails',compact('show'));
    }


    public function edit($about)
    {
        $edit = About::findOrFail($about);
        return view('admin.about.edit', compact('edit'));
    }


    public function update(Request $request,$about)
    {
        $update = About::findOrFail($about);
        $update->Content = $request->cont;
        $update->FontSize = $request->font;
        $update->Color = $request->color;
        $update->save();
        session()->flash('edit', 'the selected row successfully updated!');
        return redirect()->route('about.index');
    }


    public function destroy($about)
    {
        About::destroy($about);
        session()->flash('delete', 'the selected row deleted!');
        return redirect()->route('about.index');
    }
}
