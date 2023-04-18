@extends('pages.layout.layout')
@section('content')
    <div class="container ml-10 mr-10 mb-10 mt-20 flex">
        <div class="bg-white rounded-lg shadow-lg p-6">
            @if (Session::has('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">{{ Session::get('message') }}</strong>
                    {{-- <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 6.066 4.652a1 1 0 00-1.414 1.414L8.586 10l-3.934 3.934a1 1 0 001.414 1.414L10 11.414l3.934 3.934a1 1 0 001.414-1.414L11.414 10l3.934-3.934a1 1 0 000-1.414z" />
                    </svg>
                </span> --}}
                </div>
            @endif
            <h1 class="text-xl font-bold mb-4">Dashboard Admin</h1>
            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse
                lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam.
                Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p>
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-0 p-5">
                    <div class="bg-white rounded-md shadow-lg p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 p-3 rounded-full bg-blue-500 text-white">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-medium text-gray-900">Total</p>
                                <p class="text-3xl font-semibold text-gray-800">1,234</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 mb-4 md:mb-0 p-5">
                    <div class="bg-white rounded-md shadow-lg p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 p-3 rounded-full bg-green-500 text-white">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-medium text-gray-900">Total</p>
                                <p class="text-3xl font-semibold text-gray-800">567</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 p-5">
                    <div class="bg-white rounded-md shadow-lg p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 p-3 rounded-full bg-yellow-500 text-white">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-medium text-gray-900">Total</p>
                                <p class="text-3xl font-semibold text-gray-800">789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
