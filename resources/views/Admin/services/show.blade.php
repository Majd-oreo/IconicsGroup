@extends('LayoutsAdmin.app')

@section('title', 'View Application')
@section('breadcrumb', 'Application Details')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Service Details
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Detailed information about the Service
            </p>
        </div>

        <div class="px-4 py-5 sm:p-6">

                <div>
                    <label class="block text-sm font-medium text-gray-500">Title</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $service->title }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Description</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $service->description}}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500">Image</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $service->image}}</p>
                </div>

                 <div>
                    <label class="block text-sm font-medium text-gray-500">Icon</label>
                    <p class="mt-1 text-sm text-gray-900">{{ $service->icon}}</p>
                </div>


<div class="mt-8 flex justify-end">
                <a href="{{ route('admin.service.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Back to Services
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
