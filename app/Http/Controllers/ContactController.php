<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        $contact = ContactMessage::all();
        return view('contact.index', compact('contact'));
    }

    public function show(string $id)
    {
        $contact = ContactMessage::findOrFail($id);
        return view('contact.show', compact('contact'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validated);

        return redirect()->route('contact.index')->with('success', 'Message sent successfully!');
    }
}
