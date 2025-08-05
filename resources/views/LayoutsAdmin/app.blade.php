<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Font Awesome (CDN version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Chart.js (CDN version as extra backup) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Nucleo Icons (Optional – only if you have these locally) -->
    {{--
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    --}}

    <!-- Argon Dashboard Tailwind (local version) -->
    <link href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />

    @stack('styles')
</head>

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

    <!-- Sidebar -->
    @include('LayoutsAdmin.sidebar')

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        @include('LayoutsAdmin.navbar')

        <!-- Content -->
        <div class="w-full px-6 py-6 mx-auto">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('LayoutsAdmin.footer')
    </main>

    <!-- Fixed Plugin -->
    @include('LayoutsAdmin.fixed-plugin')

    <!-- Scripts -->
    <!-- plugin for charts  -->
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

    <!-- plugin for scrollbar  -->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>

    <!-- main script file  -->
    <script src="{{ asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    @stack('scripts')
</body>
</html>
