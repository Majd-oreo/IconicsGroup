<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Application;
use App\Models\Service;
use App\Models\ContactMessage;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCareers = Career::count();
        $totalApplications = Application::count();
        $totalServices = Service::count();
        $totalMessages = ContactMessage::count();
        $seenApplications = Application::where('application_status', 'Seen')->count();
        $unseenApplications = Application::where('application_status', 'Unseen')->count();
        $todayApplications = Application::whereDate('created_at', Carbon::today())->count();

        return view('Admin.dashboard', compact(
            'totalCareers',
            'totalApplications',
            'totalServices',
            'totalMessages',
            'seenApplications',
            'unseenApplications',
            'todayApplications'
        ));
    }
}
