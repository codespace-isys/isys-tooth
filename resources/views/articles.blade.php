<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- index.html --}}
    <script src="./assets/vendor/preline/dist/preline.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ URL('img/gigi.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Diagnosis Penyakit Gigi & Mulut</title>
</head>

<body class="scrollbar-hide">
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
    <main class="bg-white max-w-full flex items-center justify-between mx-auto max-h-full">
        <div class="container mx-auto px-6 font-inter sm:flex sm:flex-wrap sm:gap-10 sm:justify-evenly mt-10">
            @foreach ($articles as $article)
                <!-- container for all cards -->
                <div class="container w-100 lg:w-full mx-auto flex flex-col">
                    <!-- card -->
                    <div v-for="card in cards"
                        class="flex flex-col md:flex-row overflow-hidden
                                                      bg-white rounded-lg shadow-xl mt-4 w-100 mx-2">
                        <!-- media -->
                        <div class="flex w-auto md:w-1/3 relative overflow-hidden">
                            <img class="inset-0 h-full w-full object-cover object-center scale-100 hover:scale-150 ease-in duration-300 rounded-full shadow-2xl dark:shadow-gray-800"
                                src="/img/{{ $article->image }}" />
                        </div>
                        <!-- content -->
                        <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                            <h3
                                class="leading-tight truncate mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                {{ $article->title }}</h3>
                            <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                                {!! $article->short_description !!}
                            </p>
                            <button type="button"
                                class="py-3 inline-flex font-semibold  text-blue-500 focus:outline-none text-sm border-transparent focus:border-transparent focus:ring-0 no-underline hover:underline"
                                data-hs-overlay="#hs-large-modal{{ $article->id }}">
                                Read More
                            </button>
                        </div>
                    </div>
                    <!--/ card-->
                </div>
                <!--/ flex-->
                <!-- Extra Large Modal -->
                <div id="hs-large-modal{{ $article->id }}"
                    class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                    <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-screen-2xl lg:w-full m-3 lg:mx-auto">
                        <div
                            class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-white-200 dark:border-gray-200 dark:shadow-slate-700/[.7]">
                            <div class="flex justify-between border items-center border-b py-3 px-4 dark:border-gray-200 shadow-lg">
                                <p class="ml-12 text-2xl font-bold text-gray-800 dark:text-gray-800">
                                    {{ $article->title }}
                                </p>
                                <button type="button"
                                    class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                                    data-hs-overlay="#hs-large-modal{{ $article->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                            <div class="px-14 mb-14 mt-8 overflow-y-auto">
                                <!-- card -->
                                <div v-for="card in cards"
                                    class="flex flex-col md:flex-row overflow-hidden
                                                      bg-white rounded-lg mt-4 w-100 mx-2">
                                    <!-- media -->
                                    <div class="flex w-auto md:w-full relative overflow-hidden">
                                        <img class="inset-0 h-full w-full object-cover object-center  rounded-2xl"
                                            src="/img/{{ $article->image }}" />
                                    </div>
                                    <!-- content -->
                                    <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                                        <h3
                                            class="leading-tight truncate mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">
                                            {{ $article->title }}</h3>
                                        <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                                            {!! $article->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <footer class="w-full bg-gray-800 text-gray-300 relative bottom-0 mt-10">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full sm:w-auto mb-4 sm:mb-0">
                    <h3 class="text-lg font-medium">Company Name</h3>
                    <p class="mt-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="w-full sm:w-auto">
                    <h3 class="text-lg font-medium">Contact Us</h3>
                    <ul class="mt-2 text-sm">
                        <li><a href="#" class="hover:text-gray-400">Email: yonandaharyono@gmail.com</a></li>
                        <li><a href="#" class="hover:text-gray-400">Phone: +62 82331050979</a></li>
                        <li><a href="#" class="hover:text-gray-400">Address: Bumi Mondoroko Raya</a></li>
                    </ul>
                </div>
                <div class="w-full sm:w-auto">
                    <h3 class="text-lg font-medium">Follow Us</h3>
                    <ul class="mt-2 text-sm">
                        <li><a href="#" class="hover:text-gray-400">Twitter</a></li>
                        <li><a href="#" class="hover:text-gray-400">Facebook</a></li>
                        <li><a href="#" class="hover:text-gray-400">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 flex justify-between items-center">
                <p class="text-sm">© 2023 Yonanda Haryono. All rights reserved.</p>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-400"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="hover:text-gray-400"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
