@extends('LayoutsAdmin.app')

@section('title', 'View Application')
@section('breadcrumb', 'Application Details')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Application Details
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Detailed information about the applicant
            </p>
        </div>

        <div class="px-4 py-5 sm:p-6">
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                <!-- Personal Information -->
                <div class="sm:col-span-2">
                    <h4 class="text-md font-medium text-gray-900 mb-3 pb-2 border-b border-gray-200">Personal Information</h4>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Full Name</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->full_name }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Birth Date</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->birth }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">National ID</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->nation_id }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Nationality</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->nationality }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Gender</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->gender }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Marital Status</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->status }}</p>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-gray-500">Address</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->address }}</p>
                </div>

                <!-- Contact Information -->
                <div class="sm:col-span-2 mt-6 pt-4 border-t border-gray-200">
                    <h4 class="text-md font-medium text-gray-900 mb-3 pb-2 border-b border-gray-200">Contact Information</h4>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Email</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->email }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Phone</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->phone }}</p>
                </div>

                <!-- Education Information -->
                <div class="sm:col-span-2 mt-6 pt-4 border-t border-gray-200">
                    <h4 class="text-md font-medium text-gray-900 mb-3 pb-2 border-b border-gray-200">Education Information</h4>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Degree</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->degree }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Graduation Date</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->graduation }}</p>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-gray-500">Major</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->major }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Courses</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->courses ?? '-' }}</p>
                </div>

                <!-- Employment Information -->
                <div class="sm:col-span-2 mt-6 pt-4 border-t border-gray-200">
                    <h4 class="text-md font-medium text-gray-900 mb-3 pb-2 border-b border-gray-200">Employment Information</h4>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Employment Status</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->employment_status }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Current Salary</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->current_salary }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Expected Salary</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->expected_salary }}</p>
                </div>

                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-gray-500">Experience</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->experience ?? '-' }}</p>
                </div>

                <!-- Language Skills -->
                <div class="sm:col-span-2 mt-6 pt-4 border-t border-gray-200">
                    <h4 class="text-md font-medium text-gray-900 mb-3 pb-2 border-b border-gray-200">Language Skills</h4>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">First Language</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->fist_language }} ({{ $application->first_language_level }})</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Second Language</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->second_language ?? '-' }} ({{ $application->second_language_level ?? '-' }})</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Other Language</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->other_language ?? '-' }} ({{ $application->other_language_level ?? '-' }})</p>
                </div>

                <!-- Application Details -->
                <div class="sm:col-span-2 mt-6 pt-4 border-t border-gray-200">
                    <h4 class="text-md font-medium text-gray-900 mb-3 pb-2 border-b border-gray-200">Application Details</h4>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Career</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->career->name ?? '-' }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Application Status</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $application->application_status }}</p>
                </div>

                <!-- Documents -->
                <div class="sm:col-span-2 mt-6 pt-4 border-t border-gray-200">
                    <h4 class="text-md font-medium text-gray-900 mb-3 pb-2 border-b border-gray-200">Documents</h4>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">CV File</label>
                    <div class="mt-1">
                        <a href="{{ asset('storage/' . $application->cv_file) }}" target="_blank" class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            View CV
                            <svg class="ml-1.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Front National ID</label>
                    <div class="mt-1">
                        <a href="{{ asset('storage/' . $application->front_national_id) }}" target="_blank" class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            View Front ID
                            <svg class="ml-1.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Back National ID</label>
                    <div class="mt-1">
                        <a href="{{ asset('storage/' . $application->back_national_id) }}" target="_blank" class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            View Back ID
                            <svg class="ml-1.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <a href="{{ route('admin.application.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Back to Applications
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
