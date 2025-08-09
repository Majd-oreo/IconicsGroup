<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                    <a class="text-white opacity-50" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">
                    @yield('breadcrumb', 'Dashboard')
                </li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize">@yield('title', 'Dashboard')</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">

            </div>
@auth
    <li class="flex items-center px-4 text-white">
        <a href="{{ route('profile.edit') }}" class="flex items-center space-x-2 hover:text-gray-300">
            <i class="fa fa-user text-white"></i>
            <div class="flex flex-col leading-tight">
                <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
            </div>
        </a>
    </li>
@endauth


    <li class="flex items-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                <i class="fa fa-sign-out sm:mr-1"></i>
                <span class="hidden sm:inline">Logout</span>
            </a>
        </form>
    </li>
</ul>




                <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                        <div class="w-4.5 overflow-hidden">
                            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                            <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                            <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                        </div>
                    </a>
                </li>

                <li class="flex items-center px-4">
                    <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
<i class="fa-solid fa-bell" style="color: #ffffff;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
