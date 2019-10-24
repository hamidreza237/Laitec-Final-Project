<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {   $test='1';
        return view('website.index',compact('test'));
    }
}
