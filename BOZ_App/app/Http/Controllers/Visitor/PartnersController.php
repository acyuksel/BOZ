<?php

namespace App\Http\Controllers;

use App\Models\partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recommendations.index')->with(['recommendations' => Recommendation::all()]);
    }


}
