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
            <h1 class="text-2xl font-bold text-gray-700 mb-6 text-center">Sign In</h1>
            @if (Session::has('error'))
                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:text-red-400 dark:border-red-800"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ Session::get('error') }}</span>
                    </div>
                </div>
            @endif
            @if (Session::has('success-store-account'))
                <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:text-green-400 border-green-300 dark:border-green-800"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ Session::get('success-store-account') }}</span>
                    </div>
                </div>
            @endif
            <form method="POST" action="">
                @csrf
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
                        Sign In
                    </button>
                    <div class="flex items-center justify-between mb-2 mt-4">
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                            href="{{ route('signup') }}">
                            You don't Have Account? Sign Up!
                        </a>
                    </div>
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

    @vite('resources/js/app.js')
</body>

</html>
