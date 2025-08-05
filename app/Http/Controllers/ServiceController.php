<?php

namespace App\Http\Controllers;
use App\Models\Service;


use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = service::all();
        return view('service.index', compact('service'));
    }
    public function show(string $id)
{
    $service = service::findOrFail($id);
    return view('service.show', compact('service'));
}

}
