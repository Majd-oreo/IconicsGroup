@extends('LayoutsAdmin.app')

@section('title', 'Services')
@section('breadcrumb', 'Services')
@section('content')

<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <form method="GET" action="{{ route('admin.service.index') }}" class="mb-6 space-y-4 md:space-y-0 md:flex md:items-end md:space-x-4">
                        <div>
                            <label class="block text-sm text-gray-700 dark:text-white">Search by Title</label>
                            <input type="text" name="search" value="{{ request('search') }}" class="w-full px-3 py-2 border rounded-md dark:bg-slate-700 dark:text-white">
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 mt-2 md:mt-0 bg-blue-600 text-black rounded-md hover:bg-blue-700 transition">
                                Filter
                            </button>
                            <a href="{{ route('admin.service.index') }}" class="btn btn-secondary">Reset Filters</a>
                        </div>
                        <div>
                            <a href="{{ route('admin.service.create') }}" class="inline-block px-4 py-2 bg-orange-600 text-white rounded-md hover:bg-orange-700 transition">
                                + Add New Service
                            </a>
                        </div>
                    </form>
                    <h6 class="dark:text-white">Services Table</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Icon</th>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Description</th>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Image</th>
                                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <i class="{{ $service->icon }} text-xl dark:text-white"></i>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent dark:text-white">
                                            {{ $service->title }}
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent dark:text-white">
                                            {{ Str::limit($service->description, 50) }}
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="Image" class="h-12 w-12 object-cover rounded">
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                                                        <a href="{{ route('admin.service.show', $service->id) }}" class="text-xs font-semibold text-green-500 hover:underline">View </a>
                                            <a href="{{ route('admin.service.edit', $service->id) }}" class="text-xs font-semibold text-blue-500 hover:underline"> Edit</a>
           <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button type="button" class="ml-2 text-xs font-semibold text-red-500 hover:underline btn-delete">
        Delete
    </button>
</form>


                                        </td>
                                    </tr>
                                @endforeach

                                @if($services->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-gray-500 dark:text-white">
                                            No services found.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $services->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
