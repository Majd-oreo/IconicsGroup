<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Career;

class ApplicationController extends Controller
{
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

    public function create()
    {
        $careers = Career::all();
        return view('application.create', compact('careers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'career_id' => 'required|exists:careers,id',
            'full_name' => 'required|string|max:255',
            'birth' => 'nullable|date',
            'nation_id' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:Female,Male',
            'status' => 'required|in:Single,Married,Divorced',
            'degree' => 'required|in:Bachelors,Diploma,Divorced,Master,other',
            'graduation' => 'required|date',
            'major' => 'required|string|max:255',
            'courses' => 'nullable|string',
            'experience' => 'nullable|string',
            'employment_status' => 'nullable|in:Unemployed,Employed',
            'current_salary' => 'nullable|string',
            'expected_salary' => 'nullable|string',
            'fist_language' => 'required|string|max:255',
            'first_language_level' => 'required|string|max:255',
            'second_language' => 'nullable|string|max:255',
            'second_language_level' => 'nullable|string|max:255',
            'other_language' => 'nullable|string|max:255',
            'other_language_level' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'cv_file' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'front_national_id' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'back_national_id' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $validated['cv_file'] = $request->file('cv_file')->store('cv_files', 'public');
        $validated['front_national_id'] = $request->file('front_national_id')->store('national_ids', 'public');
        $validated['back_national_id'] = $request->file('back_national_id')->store('national_ids', 'public');

        Application::create($validated);

        return redirect()->route('application.index')->with('success', 'Application submitted successfully!');
    }
}
