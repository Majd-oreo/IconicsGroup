<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index()
    {
        $career = Career::all();
        return view('career.index', compact('career'));
    }
    public function show(string $id)
{
    $career= Career::findOrFail($id);
    return view('career.show', compact('career'));
}


}
