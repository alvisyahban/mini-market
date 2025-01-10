<!-- resources/views/layouts/navigation.blade.php -->

<nav class="bg-white dark:bg-gray-900 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="text-xl font-semibold text-gray-900 dark:text-white">
                    Aplikasi Saya
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- Dropdown Menu -->
                    <div class="relative">
                        <button class="bg-gray-800 text-white px-4 py-2 rounded-md focus:outline-none">
                            {{ Auth::user()->name }}
                        </button>
                        <!-- Dropdown Content -->
                        <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md hidden">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-gray-900 dark:text-white">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-900 dark:text-white">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>