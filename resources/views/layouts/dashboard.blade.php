<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-800">
    
    <!-- Sidebar -->
    <div class="flex h-screen">
        <aside class="w-64 bg-gray-50 dark:bg-gray-900 p-4">
            <div class="text-center font-semibold text-xl text-gray-900 dark:text-white">
                <h1>Dashboard</h1>
            </div>
            <ul class="mt-6 space-y-4">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center text-gray-700 hover:bg-gray-300 p-2 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 4v16m8-8H4"></path></svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}" class="flex items-center text-gray-700 hover:bg-gray-300 p-2 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 13h18M3 6h18M3 18h18"></path></svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('transactions.index') }}" class="flex items-center text-gray-700 hover:bg-gray-300 p-2 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l2 7h-4l2-7zm0 11l2 7h-4l2-7zm-1 7h-1v1h1zm-3 0h-1v1h1zm9-9h1v1h-1zm-5 0h1v1h-1zm4 0h1v1h-1zm0 4h1v1h-1z"></path></svg>
                        Transactions
                    </a>
                </li>
                <li>
                    <a href="{{ route('stocks.index') }}" class="flex items-center text-gray-700 hover:bg-gray-300 p-2 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 13h18M3 6h18M3 18h18"></path></svg>
                        Manajemen Stok
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="flex items-center text-gray-700 hover:bg-gray-300 p-2 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14 9l-3 3m0 0l-3-3m3 3V4m6 4H6m15 0H5"></path></svg>
                        Logout
                    </a>r
                </li>
            </ul>
        </aside>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <header class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-semibold text-gray-900 dark:text-white">@yield('title')</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="bg-gray-800 text-white px-4 py-2 rounded-md focus:outline-none">
                        <div>{{ Auth::user()->name }}</div>
                        </button>
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md hidden">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Main Content Section -->
            <div class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-700">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Toggle dropdown menu
        const profileButton = document.querySelector('button');
        const dropdownMenu = document.querySelector('.relative .hidden');
        profileButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
