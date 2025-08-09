 @extends('LayoutsAdmin.app')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')
@section('content')


 <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->


        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
      <form method="GET" action="{{ route('admin.application.index') }}" class="mb-6 space-y-4 md:space-y-0 md:flex md:items-end md:space-x-4">

    <!-- Search Input -->
    <div>
        <label class="block text-sm text-gray-700 dark:text-white">Search (Name or National ID)</label>
        <input type="text" name="search" value="{{ request('search') }}" class="w-full px-3 py-2 border rounded-md dark:bg-slate-700 dark:text-white">
    </div>

    <!-- Status Filter -->
    <div>
        <label class="block text-sm text-gray-700 dark:text-white">Status</label>
        <select name="status" class="w-full px-3 py-2 border rounded-md dark:bg-slate-700 dark:text-white">
            <option value="">All</option>
            <option value="Seen" {{ request('status') == 'Seen' ? 'selected' : '' }}>Seen</option>
            <option value="UnSeen" {{ request('status') == 'UnSeen' ? 'selected' : '' }}>UnSeen</option>
        </select>
    </div>

    <!-- Career Filter -->
    <div>
        <label class="block text-sm text-gray-700 dark:text-white">Career</label>
        <select name="career_id" class="w-full px-8 py-2 border rounded-md dark:bg-slate-700 dark:text-white">
            <option value="">All</option>
            @foreach ($careers as $career)
                <option value="{{ $career->id }}" {{ request('career_id') == $career->id ? 'selected' : '' }}>
                    {{ $career->job_title }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Created Date -->
    <div>
        <label class="block text-sm text-gray-700 dark:text-white">Created At</label>
        <input type="date" name="start_date" value="{{ request('start_date') }}" class="w-full px-3 py-2 border rounded-md dark:bg-slate-700 dark:text-white">
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="inline-flex items-center px-4 py-2 mt-2 md:mt-0 bg-blue-600 text-black rounded-md hover:bg-blue-700 transition">
            Filter
        </button>
<a href="{{ route('admin.application.index') }}" class="btn btn-secondary">
    Reset Filters
</a>
    </div>
</form>
         <h6 class="dark:text-white">Applications table</h6>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">User</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nationality</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Application Status</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Career</th>
                                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Created at</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                  <tbody>
    @foreach ($applications as $app)
        <tr>
            <!-- User: Full name & email -->
            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                <div class="flex px-2 py-1">
                    <div lass="flex flex-col justify-center">
<a href="{{ asset('uploads/cvs/' . $app->cv_file) }}" download title="Download CV" class="text-blue-600 hover:text-blue-800">
    <i class="fa-solid fa-file-pdf fa-lg"></i>
</a>
                    </div>

                    <div class="flex flex-col justify-center">
                        <h5 class="mb-0 text-sm leading-normal dark:text-white  " >{{ $app->full_name }}</h6>
                        <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $app->email }}</p>
                    </div>
                </div>
            </td>

            <!-- Nationality -->
            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{ $app->nationality }}</p>
                <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $app->nation_id }}</p>
            </td>

            <!-- Application Status -->
            <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                @if ($app->application_status === 'Seen')
                    <span class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block font-bold uppercase text-white">Seen</span>
                @else
                    <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block font-bold uppercase text-white">Unseen</span>
                @endif
            </td>

            <!-- Career -->
            <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                    {{ $app->career->job_title ?? 'N/A' }}
                </span>
            </td>
     <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">
                    {{ $app->career->created_at ?? 'N/A' }}
                </span>
            </td>
            <!-- Edit Form -->
            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                <form method="POST" action="{{ route('admin.application.update', $app->id) }}">
    @csrf
    @method('PUT')

    <select name="application_status" class="text-xs dark:bg-slate-700 dark:text-white rounded px-2 py-1">
        <option value="Seen" {{ $app->application_status == 'Seen' ? 'selected' : '' }}>Seen</option>
        <option value="UnSeen" {{ $app->application_status == 'UnSeen' ? 'selected' : '' }}>UnSeen</option>
    </select>

    <button type="submit" class="ml-2 text-xs font-semibold text-blue-500 hover:underline">Save</button>
<a href="{{ route('admin.application.show', $app->id) }}" class="ml-2 inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 transition-all duration-200">
    View
</a>


</form>

            </td>
        </tr>
    @endforeach

</tbody>
@if($applications->isEmpty())
    <tr>
        <td colspan="6" class="text-center py-4 text-gray-500 dark:text-white">
            There is nothing to show.
        </td>
    </tr>
@endif


                  </table>
 <div class="mt-4">
                        {{ $applications->appends(request()->query())->links() }}

                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection
