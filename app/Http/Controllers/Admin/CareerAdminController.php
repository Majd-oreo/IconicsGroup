<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use Illuminate\Support\Facades\Storage;

class CareerAdminController extends Controller
{
    public function index()
    {
        $posts = Career::latest()->paginate(10);
        return view('admin.career.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.career.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'requirements' => 'required|string|max:1000',
            'status' => 'required|in:Open,Close',
        ]);

        Career::create($request->only([
            'job_title',
            'department',
            'location',
            'requirements',
            'status',
        ]));

        return redirect()->route('admin.career.index')->with('success', 'Career post created.');
    }

    public function show(string $id)
    {
        $post = Career::findOrFail($id);
        return view('admin.career.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Career::findOrFail($id);
        return view('admin.career.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Career::findOrFail($id);

        $request->validate([
            'job_title' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'requirements' => 'required|string|max:1000',
            'status' => 'required|in:Open,Close',
        ]);

        $post->update($request->only([
            'job_title',
            'department',
            'location',
            'requirements',
            'status',
        ]));

        return redirect()->route('admin.career.index')->with('success', 'Career post updated.');
    }

    public function destroy(string $id)
    {
        $post = Career::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.career.index')->with('success', 'Career post deleted.');
    }
}
