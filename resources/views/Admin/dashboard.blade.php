@extends('LayoutsAdmin.app')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <!-- row 1 - Stats Cards -->
    <div class="flex flex-wrap -mx-3">
        <!-- Total Careers Card -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60"> Careers</p>
                                <h5 class="mb-2 font-bold dark:text-white">{{ $totalCareers }}</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                   <span class="text-sm font-bold leading-normal text-emerald-500">
    +{{ $totalCareers > 0 ? '100' : '0' }}%
</span>  last month
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i  class="fa-solid fa-briefcase text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Applications Card -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">Applications</p>
                                <h5 class="mb-2 font-bold dark:text-white">{{ $totalApplications }}</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">
  +{{ $totalApplications > 0 ? 100 : 0 }}%
</span>  last month
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                <i class="fa-solid fa-chalkboard-user text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Services Card -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60"> Services</p>
                                <h5 class="mb-2 font-bold dark:text-white">{{ $totalServices }}</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+{{ $totalServices > 0 ? 100 : 0 }}%</span>
                                     last month
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class="fas fa-cogs text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Messages Card -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60"> Messages</p>
                                <h5 class="mb-2 font-bold dark:text-white">{{ $totalMessages }}</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+{{ $totalMessages > 0 ? 100 : 0 }}%</span>
                                     last month
                                </p>
                            </div>
                        </div>
                         <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                <i class="fa-solid fa-message text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional rows (charts/tables) can go here -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 lg:w-8/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 rounded-t-4">
                    <div class="flex justify-between">
                        <h6 class="mb-2 dark:text-white">Applications Overview</h6>
                    </div>
                </div>
                <div class="overflow-x-auto p-4">
                    <canvas id="applicationsChart" height="300"></canvas>
                </div>
            </div>
        </div>

        <div class="w-full max-w-full px-3 mt-6 lg:mt-0 lg:w-4/12 lg:flex-none">
            <div class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="p-4 pb-0 rounded-t-4">
                    <h6 class="mb-0 dark:text-white">Application Status</h6>
                </div>
                <div class="flex-auto p-4">
                    <!-- Seen vs Unseen Applications -->
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-muted dark:text-white/80">Seen Applications</span>
                            <span class="font-weight-bold dark:text-white">{{ $seenApplications }}</span>
                        </div>

                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-muted dark:text-white/80">Unseen Applications</span>
                            <span class="font-weight-bold dark:text-white">{{ $unseenApplications }}</span>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Applications Chart
    const ctx = document.getElementById('applicationsChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Applications',
                data: [
                    Math.round({{ $totalApplications }} * 0.05),
                    Math.round({{ $totalApplications }} * 0.1),
                    Math.round({{ $totalApplications }} * 0.15),
                    Math.round({{ $totalApplications }} * 0.2),
                    Math.round({{ $totalApplications }} * 0.3),
                    Math.round({{ $totalApplications }} * 0.4),
                    Math.round({{ $totalApplications }} * 0.5),
                    Math.round({{ $totalApplications }} * 0.65),
                    Math.round({{ $totalApplications }} * 0.8),
                    Math.round({{ $totalApplications }} * 0.9),
                    Math.round({{ $totalApplications }} * 0.95),
                    {{ $totalApplications }}
                ],
                backgroundColor: 'rgba(78, 115, 223, 0.05)',
                borderColor: 'rgba(78, 115, 223, 1)',
                borderWidth: 2,
                pointRadius: 3,
                pointBackgroundColor: 'rgba(78, 115, 223, 1)',
                pointBorderColor: '#fff',
                pointHoverRadius: 5,
                fill: true
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });


    // Refresh stats button
    document.getElementById('refresh-stats').addEventListener('click', function() {
        const btn = this;
        const originalHtml = btn.innerHTML;

        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Refreshing...';
        btn.disabled = true;

        // Simulate refresh
        setTimeout(() => {
            window.location.reload();
        }, 1500);
    });
});
</script>

@endsection
