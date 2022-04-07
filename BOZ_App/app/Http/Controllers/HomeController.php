<?php

namespace App\Http\Controllers;

use App\Models\FrontEndSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home.index')->with(['sections' => FrontEndSection::orderBy('number')->get()]);
    }
}
