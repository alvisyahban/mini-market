<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <title>Login</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-slate-200 dark:bg-gray-900">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl dark:border dark:bg-gray-800 dark:border-gray-700 md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold dark:text-white">Login</span>
                <!-- Form -->
                <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="py-4">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                        <input type="email" name="email" id="email" 
                               class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg dark:text-white focus:ring-fuchsia-500 focus:border-fuchsia-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"  
                               placeholder="name@gmail.com" required="">
                    </div>              
                    <div class="py-4">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg dark:text-white focus:ring-fuchsia-500 focus:border-fuchsia-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"  
                        required="">
                    </div>
                    <button type="submit" class="w-full bg-fuchsia-500 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                        Log in
                    </button>
                    <div class="text-center text-gray-400">
                        <p class="text-sm font-light text-gray-500 dark:text-white">
                            Don't Have Account Yet ? <a href="{{ route('register') }}" class="font-medium text-fuchsia-500 hover:underline dark:text-fuchsia-500">Register here</a>
                        </p>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</body>
</html>

@if (session('status'))
    <div class="bg-green-500 text-white p-2 rounded-lg mb-4">
        {{ session('status') }}
    </div>
@endif
