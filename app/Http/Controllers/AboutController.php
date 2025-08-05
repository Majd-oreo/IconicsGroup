<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutUs::all();
        return view('about.index', compact('about'));
    }
}
