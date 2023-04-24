<!doctype html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="{{ URL('img/gigi.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title>Diagnosis Penyakit Gigi & Mulut</title>
</head>

<body>
    <header class="bg-white shadow-md">
        <nav class="flex items-center justify-between max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center">
                <a href="#" class="font-bold text-xl text-blue-500 hover:text-blue-600">Diagnosis Gigi & Mulut</a>
                {{-- <ul class="flex space-x-4 ml-8">
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Home</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">About</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Contact</a></li>
        </ul> --}}
            </div>
            <div class="flex items-center">
                <a class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mr-4">Sign Up</a>
                <a href="{{ URL('/login') }}"
                    class="bg-transparent border border-blue-500 hover:bg-blue-500 text-blue-500 hover:text-white px-4 py-2 rounded-md">Sign In</a>
            </div>
        </nav>
    </header>

    <main class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
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
                    <a href="{{ route('articles') }}"
                        class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Learn
                        More</a>
                </div>
                <div class="md:col-start-2">
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
