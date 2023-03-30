<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
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
                <a class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mr-4">Sign up</a>
                <a href="{{ URL('/login') }}"
                    class="bg-transparent border border-blue-500 hover:bg-blue-500 text-blue-500 hover:text-white px-4 py-2 rounded-md">Log
                    in</a>
            </div>
        </nav>
    </header>
    <main class="bg-white">
        <div class="container mx-auto px-6 font-inter sm:flex sm:flex-wrap sm:gap-10 sm:justify-evenly mt-10">
            <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-96 lg:w-5/12">
                <img src="https://via.placeholder.com/640x480" alt="">
                <div class="px-8 py-5">
                    <div class="font-bold text-3xl mb-2 text-slate-800">
                        Image Title
                        <p class="text-sm text-slate-500 mt-8">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a
                                href="#" class="text-blue-500 hover:text-blue-700 font-medium underline">Learn
                                More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-96 lg:w-5/12">
                <img src="https://via.placeholder.com/640x480" alt="">
                <div class="px-8 py-5">
                    <div class="font-bold text-3xl mb-2 text-slate-800">
                        Image Title
                        <p class="text-sm text-slate-500 mt-8">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a
                                href="#" class="text-blue-500 hover:text-blue-700 font-medium underline">Learn
                                More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-96 lg:w-5/12">
                <img src="https://via.placeholder.com/640x480" alt="">
                <div class="px-8 py-5">
                    <div class="font-bold text-3xl mb-2 text-slate-800">
                        Image Title
                        <p class="text-sm text-slate-500 mt-8">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a
                                href="#" class="text-blue-500 hover:text-blue-700 font-medium underline">Learn
                                More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="rounded-md shadow-lg overflow-hidden mb-10 bg-white sm:mb-0 sm:w-64 md:w-96 lg:w-5/12">
                <img src="https://via.placeholder.com/640x480" alt="">
                <div class="px-8 py-5">
                    <div class="font-bold text-3xl mb-2 text-slate-800">
                        Image Title
                        <p class="text-sm text-slate-500 mt-8">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum. <a
                                href="#" class="text-blue-500 hover:text-blue-700 font-medium underline">Learn
                                More</a>
                        </p>
                    </div>
                </div>
            </div>
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
