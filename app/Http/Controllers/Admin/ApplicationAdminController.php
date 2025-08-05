<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $application = Application::all();
        return view('application.index', compact('application'));
    }

    public function show(string $id)
    {
        $application = Application::findOrFail($id);
        return view('application.show', compact('application'));
    }
  public function destroy(string $id)
    {
        $application = Application::findOrFail($id);


        $application->delete();

        return redirect()->route('admin.application.index')->with('success', 'application entry deleted.');
    }


}
