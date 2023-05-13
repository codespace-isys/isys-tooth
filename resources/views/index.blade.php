<!doctype html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="{{ URL('img/gigi.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title>Diagnosis Penyakit Gigi & Mulut</title>
</head>

<body class="scrollbar-hide">
    <header>
        <nav class="bg-white border-gray-200 dark:bg-white items-center justify-between max-w-full px-20 mx-auto py-2 drop-shadow-md">
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
                        {{-- <li>
                            <a href=""
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-900 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-900 md:dark:hover:bg-transparent">About</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="bg-white">
        <div class="max-w-screen-2xl mx-auto py-12 px-20  ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-center">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Welcome to System Pakar</h2>
                    <p class="text-gray-700 mb-4">Sistem pakar adalah suatu program komputer atau sistem informasi yang
                        mengandung
                        beberapa pengetahuan dari satu atau lebih pakar manusia terkait suatu bidang yang cenderung
                        spesifik. Pakar
                        yang dimaksudkan merupakan seseorang yang memiliki keahlian khusus di bidangnya masing-masing.
                        Perangkat
                        lunak ini pertama kali dikembangkan oleh periset program kecerdasan buatan (AI) sekitar tahun
                        1960-an dan
                        1970-an, serta baru diterapkan pada tahun 1980-an.</p>
                    <a href="{{ route('login') }}"
                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Sign
                        In Here !</a>
                </div>
                <div class="md:col-start-2 ml-28">
                    <img src="{{ URL('img/gigi.png') }}" alt="Placeholder image" class="rounded-lg ">
                </div>
            </div>
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Tujuan Sistem Pakar</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Interpretasi</h4>
                        <p class="text-gray-700">Expert system bertujuan untuk membuat sebuah kesimpulan atau deskripsi
                            dari
                            sekumpulan data yang masih mentah (raw data). Pengambilan keputusan tersebut berdasarkan
                            hasil observasi,
                            mulai dari analisis citra, pengenalan kata melalui ucapan, interpretasi sinyal, dan lain
                            sebagainya.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Prediksi</h4>
                        <p class="text-gray-700">Mampu untuk memproyeksikan akibat dari situasi dan kondisi tertentu,
                            contohnya
                            prediksi terkait data demografi, ekonomi, finance, dan lain-lain.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Diagnosis</h4>
                        <p class="text-gray-700">Dapat menentukan penyebab terjadinya malfungsi di dalam situasi yang
                            kompleks
                            berdasarkan gejala yang dapat teramati dengan diagnosis yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="w-full bg-gray-800 text-gray-300 relative bottom-0 ">
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
    @vite('resources/js/app.js')
</body>

</html>
