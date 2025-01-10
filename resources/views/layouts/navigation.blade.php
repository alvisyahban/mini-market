<!-- resources/views/layouts/navigation.blade.php -->

<nav class="bg-white dark:bg-gray-900 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="text-xl font-semibold text-gray-900 dark:text-white">
                    Dashboard
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="flex items-center space-x-4">
                @auth
                    @if (Auth::user()->hasRole('admin'))
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-900 dark:text-white">Dashboard Admin</a>
                    @elseif (Auth::user()->hasRole('supervisor'))
                        <a href="{{ route('supervisor.dashboard') }}" class="text-gray-900 dark:text-white">Dashboard Supervisor</a>
                    @elseif (Auth::user()->hasRole('kasir'))
                        <a href="{{ route('kasir.dashboard') }}" class="text-gray-900 dark:text-white">Dashboard Kasir</a>
                    @elseif (Auth::user()->hasRole('gudang'))
                        <a href="{{ route('gudang.dashboard') }}" class="text-gray-900 dark:text-white">Dashboard Gudang</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>