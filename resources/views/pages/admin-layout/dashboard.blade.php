@extends('pages.layout.layout')
@section('content')
    @if ($message = Session('login-admin'))
        <script>
            const swalWithTailwindButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'text-green-700 hover:text-white border border-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800',
                    cancelButton: 'text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900'
                },
                buttonsStyling: false
            })
            swalWithTailwindButtons.fire(
                'Successfully!',
                '{{ $message }}',
                'success'
            )
        </script>
    @endif
    <div class="container ml-10 mr-10 mb-10 mt-20 flex">
        <div class="bg-white rounded-lg shadow-lg p-6">

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
