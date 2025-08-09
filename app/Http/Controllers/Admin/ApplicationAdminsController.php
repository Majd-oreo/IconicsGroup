<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Career;

class ApplicationAdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function index(Request $request)
{
    $query = Application::with('career');

    // Search by name or national ID
    if ($request->filled('search')) {
        $searchTerm = $request->search;
        $query->where(function ($q) use ($searchTerm) {
            $q->where('full_name', 'like', "%{$searchTerm}%")
              ->orWhere('nation_id', 'like', "%{$searchTerm}%");
        });
    }

    // Filter by status
    if ($request->filled('status')) {
        $query->where('application_status', $request->status);
    }

    // Filter by created_at date
    if ($request->filled('start_date')) {
        $query->whereDate('created_at', '>=', $request->start_date);
    }

    // Filter by career
    if ($request->filled('career_id')) {
        $query->where('career_id', $request->career_id);
    }

    $applications = $query->orderByDesc('created_at')->paginate(10);
    $careers = Career::all(); // Needed for career dropdown

    return view('Admin.applications.index', compact('applications', 'careers'));
}

    public function show(string $id)
    {
        $application = Application::findOrFail($id);
        return view('Admin.applications.show', compact('application'));
    }
    public function update(Request $request, string $id)
{
    $request->validate([
        'application_status' => 'required|in:Seen,UnSeen',
    ]);

    $application = Application::findOrFail($id);
    $application->update([
        'application_status' => $request->application_status,
    ]);

    return redirect()->back()->with('success', 'Application status updated successfully.');
}

  public function destroy(string $id)
    {
        $application = Application::findOrFail($id);


        $application->delete();

        return redirect()->route('Admin.applications.index')->with('success', 'application entry deleted.');
    }


}
