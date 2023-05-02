<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 scrollbar-hide">
    <header class="bg-white shadow-md">
        <nav
            class="bg-white border-gray-200 dark:bg-white items-center justify-between max-w-full px-20 mx-auto py-2 drop-shadow-md">
            <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center">
                    <span
                        class="self-center whitespace-nowrap font-bold text-xl text-blue-500 hover:text-blue-600">Diagnosis
                        Gigi & Mulut</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-white">
                        <li>
                            <a href="{{ route('index') }}"
                                class="text-white bg-blue-700 hover:bg-blue-700 focus:ring-4 focus:ring-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-800"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('articles') }}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900 md:dark:hover:bg-transparent">Articles</a>
                        </li>
                        <li>
                            <a href=""
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900 md:dark:hover:bg-transparent">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Sign Up</h1>
            <form method="POST" action="">
                @csrf
                <div class="mb-4">
                    <label
                        class="block text-gray-700 font-bold mb-2{{ $errors->has('name') ? 'block mb-2 text-sm font-bold text-red-700 dark:text-red-500' : '' }}"
                        for="name">
                        Name
                    </label>
                    <input
                        class="border border-gray-400 p-2 w-full rounded-md{{ $errors->has('name') ? ' border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}"
                        id="name" name="name" value="{{ old('name') }}" type="text"
                        placeholder="Enter your name" />
                    @if ($errors->has('name'))
                        <p class="text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $errors->first('name') }}</span></p>
                    @endif
                </div>
                <div class="mb-4 mt-4">
                    <label
                        class="block text-gray-700 font-bold mb-2{{ $errors->has('email') ? 'block mb-2 text-sm font-bold text-red-700 dark:text-red-500' : '' }}"
                        for="email">
                        Email
                    </label>
                    <input type="text" value="{{ old('email') }}"
                        class="border border-gray-400 p-2 w-full rounded-md {{ $errors->has('email') ? ' border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}"
                        name="email" placeholder="Enter your email" />
                    @if ($errors->has('email'))
                        <p class="text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $errors->first('email') }}</span></p>
                    @endif
                </div>
                <div class="mb-4">
                    <label
                        class="block text-gray-700 font-bold mb-2{{ $errors->has('password') ? 'block mb-2 text-sm font-bold text-red-700 dark:text-red-500' : '' }}"
                        for="password">
                        Password
                    </label>
                    <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                        @if (!$errors->has('password'))
                            <input
                                class="border border-gray-400 p-2 w-full rounded-md {{ $errors->has('password') ? 'border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}"
                                name="password" id="password" type="password" placeholder="Enter your password" />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button id="toggle-password" type="button" class=" focus:outline-none border-none">
                                    <img src="{{ URL('img/hide.png') }}" class="h-6 w-6" id="imgClickAndChange"
                                        onclick="changeImage()">
                                    </img>
                                </button>
                            </div>
                        @endif
                        @if ($errors->has('password'))
                            <input
                                class="border border-gray-400 p-2 w-full rounded-md {{ $errors->has('password') ? 'border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}"
                                name="password" id="passwordRed" type="password" placeholder="Enter your password" />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button id="toggle-password-red" type="button" class=" focus:outline-none border-none">
                                    <img src="{{ URL('img/hide_red.png') }}" class="h-6 w-6" id="imgClickAndChangeRed"
                                        onclick="changeImageRed()">
                                    </img>
                                </button>
                            </div>
                        @endif
                    </div>
                    @if ($errors->has('password'))
                        <p class="text-sm text-red-600 dark:text-red-500"><span
                                class="font-medium">{{ $errors->first('password') }}</span></p>
                    @endif
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
                        You Have Account? Sign In!
                    </a>
                </div>
            </form>
        </div>
    </div>
    <script>
        let image_tracker = 'view';

        function changeImage() {
            let image = document.getElementById('imgClickAndChange');
            if (image_tracker == 'view') {
                image.src = '/img/view.png';
                image_tracker = 'hide';
            } else {
                image.src = '/img/hide.png';
                image_tracker = 'view';
            }
        }

        const togglePassword = document.querySelector('#toggle-password');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    </script>
    <script>
        function changeImageRed() {
            let image = document.getElementById('imgClickAndChangeRed');
            if (image_tracker == 'view') {
                image.src = '/img/show_red.png';
                image_tracker = 'hide';
            } else {
                image.src = '/img/hide_red.png';
                image_tracker = 'view';
            }
        }
        const passwordRed = document.querySelector('#passwordRed');
        const togglePasswordRed = document.querySelector('#toggle-password-red');
        togglePasswordRed.addEventListener('click', function(e) {
            const type = passwordRed.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordRed.setAttribute('type', type);
        });
    </script>
</body>

</html>
