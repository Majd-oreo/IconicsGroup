<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
    {
        $contact = ContactMessage::all();
        return view('admin.contact.index', compact('contact'));
    }

    public function show(string $id)
    {
        $contact = ContactMessage::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }
  public function destroy(string $id)
    {
        $contact = ContactMessage::findOrFail($id);


        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Contact Message entry deleted.');
    }

}
