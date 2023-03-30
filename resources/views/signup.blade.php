<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Sign Up</h1>
            <form method="POST" action="">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-md" id="name" name="name" type="text"
                        placeholder="Enter your name" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-md" id="email" name="email" type="email"
                        placeholder="Enter your email address" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-md" id="password" name="password" type="password"
                        placeholder="Enter your password" />
                </div>
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full"
                        type="submit">
                        Sign Up
                    </button>
                </div>
                <div class="flex items-center justify-between mb-2 mt-4">
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="{{ route('login') }}">
                        You Have Account? Login!
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>