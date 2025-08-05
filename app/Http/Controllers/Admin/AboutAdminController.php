<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AboutAdminController extends Controller
{
    public function index()
    {
        $about = AboutUs::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $validated['image'] = $request->file('image')->store('about_images', 'public');

        AboutUs::create($validated);

        return redirect()->route('admin.about.index')->with('success', 'About Us entry created successfully.');
    }

    public function show(string $id)
    {
        $about = AboutUs::findOrFail($id);
        return view('admin.about.show', compact('about'));
    }

    public function edit(string $id)
    {
        $about = AboutUs::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, string $id)
    {
        $about = AboutUs::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            $validated['image'] = $request->file('image')->store('about_images', 'public');
        }

        $about->update($validated);

        return redirect()->route('admin.about.index')->with('success', 'About Us entry updated successfully.');
    }

    public function destroy(string $id)
    {
        $about = AboutUs::findOrFail($id);

        if ($about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'About Us entry deleted.');
    }
}
