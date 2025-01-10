<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <title>Register</title>
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-slate-200 dark:bg-gray-900">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl dark:border dark:bg-gray-800 dark:border-gray-700 md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold dark:text-white">Create Account</span>
                <form method="POST" action="{{ route('register') }}" class="space-y-4 md:space-y-6">
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
                    <div class="py-4">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-100 border border-gray-400 text-gray-900 text-sm rounded-lg dark:text-white focus:ring-fuchsia-500 focus:border-fuchsia-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"  
                        required="">
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-fuchsia-500 hover:underline dark:text-fuchsia-500" href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-fuchsia-500 text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300" >
                        Signup 
                    </button>
                    <div class="text-center text-gray-400">
                        <p class="text-sm font-light text-gray-500 dark:text-white">
                            Already have an account? <a href="{{ route('login') }}" class="font-medium text-fuchsia-500 hover:underline dark:text-fuchsia-500">Login here</a>
                        </p>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>
