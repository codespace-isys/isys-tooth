<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title>Login Page</title>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Login</h1>
            @if (Session::has('status'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{ Session::get('message')}}</strong>
                {{-- <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 6.066 4.652a1 1 0 00-1.414 1.414L8.586 10l-3.934 3.934a1 1 0 001.414 1.414L10 11.414l3.934 3.934a1 1 0 001.414-1.414L11.414 10l3.934-3.934a1 1 0 000-1.414z" />
                    </svg>
                </span> --}}
            </div>
            @endif
            <form method="POST" action="">
                @csrf
                <div class="mb-4 mt-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email
                    </label>
                    <input type="email" class="border border-gray-400 p-2 w-full rounded-md" name="email"
                        placeholder="Enter your email" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-md" name="password" type="password"
                        placeholder="Enter your password" />
                </div>
                {{-- <div class="flex items-center justify-between mb-4">
                    <label class="block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight" type="checkbox" />
                        <span class="text-sm">
                            Remember me
                        </span>
                    </label>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Forgot Password?
                    </a>
                </div> --}}
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full"
                        type="submit">
                        Sign In
                    </button>
                    <div class="flex items-center justify-between mb-2 mt-4">
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                            href="{{ URL('/signup') }}">
                            You don't Have Account? Sign Up!
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>