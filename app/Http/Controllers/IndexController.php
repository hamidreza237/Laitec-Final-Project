<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $setting = Setting::all();
        return view('website.index', compact('setting'));
    }
}
