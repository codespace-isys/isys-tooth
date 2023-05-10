@extends('pages.layout.layout')
@section('content')
    @if ($found == 'Your Sickness Diagnosis Has Been Found')
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
                '{{ $found }}',
                'success'
            )
        </script>
    @endif
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mt-10">
        <div class="flex items-center justify-start"><span
                class="inline-flex justify-center items-center w-12 h-12 rounded-full bg-white text-black dark:bg-slate-900/70 dark:text-white mr-3">
                <img src="{{ URL('img/medical-report.png') }}" viewBox="0 0 24 24" width="24" height="24"
                    class="inline-block">
                </img></span>
            <h1 class="leading-tight font-bold text-4xl">Result Diagnosis</h1>
        </div>
    </div>
    <a href="{{ route('export-diagnosis') }}"
        class="flex items-center justify-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 text-sm dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 w-60 font-bold py-2 px-4 mt-5 ml-16 rounded">
        <img src="{{ URL('img/printer.png') }}" class="w-5 mr-2" alt="">
        Print Sickness Diagnosis
    </a>
    <div class="px-16 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-14 mt-10 mb-14">
        <div class="p-8 mt-6 lg:mt-0 rounded bg-white shadow-lg">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <div
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/doctor-consultation-black.png') }}" class="w-4 h-4 mr-2 fill-black"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Diagnosis
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                                Result Indication</div>
                        </div>
                    </li>
                </ol>
            </div>
            <h2 class="mb-10 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                Indication Result
            </h2>
            <div class="container rounded overflow-hidden shadow-md mb-10 mt-10 ">
                <ul class="max-w-xs flex flex-col divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($result as $show)
                        @foreach ($show->indications as $item)
                            <li
                                class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                                {{ $item->code_indication }} <img src="{{ URL('img/fast-forward.png') }}" alt=""
                                    width="5%"> {{ $item->indication }}
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="p-8 mt-6 lg:mt-0 rounded bg-white shadow-lg">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <div
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/doctor-consultation-black.png') }}" class="w-4 h-4 mr-2 fill-black"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Diagnosis
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                                Biodata User</div>
                        </div>
                    </li>
                </ol>
            </div>
            <h2 class="mb-10 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                Biodata User
            </h2>
            <div class="container mx-auto px-1 ">
                <div class="flex bg-white border border-gray-300 rounded-xl overflow-hidden items-center justify-start"
                    style="cursor: auto;">
                    <div class="relative w-44 h-44 flex-shrink-0">
                        <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                            <img alt="Placeholder Photo"
                                class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50"
                                loading="lazy" src="/img/{{ auth()->user()->image }}">
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-2xl font-semibold line-clamp-1">{{ auth()->user()->name }}</p>
                        <p class="text-sm text-gray-500 mt-1 line-clamp-2">{{ auth()->user()->address }}</p>
                        <span class="flex items-center justify-start text-gray-500">
                            <svg class="inline-block w-4 h-4 mr-3 opacity-40" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            {{ auth()->user()->phone }}
                        </span>
                        <span class="flex items-center justify-start text-gray-500">
                            <svg class="inline-block w-4 h-4 mr-3 opacity-40" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            {{ auth()->user()->email }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-1 mb-10 shadow-2xl">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <div
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/doctor-consultation-black.png') }}" class="w-4 h-4 mr-2 fill-black"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Diagnosis
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                                Result Sickness</div>
                        </div>
                    </li>
                </ol>
            </div>
            <h2 class="mb-10 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                Sickness Result</h2>
            @foreach ($result as $show)
                <!-- container for all cards -->
                <div class="container w-100 lg:w-full mx-auto flex flex-col">
                    <!-- card -->
                    <div v-for="card in cards"
                        class="flex flex-col md:flex-row overflow-hidden
                                                      bg-white rounded-lg shadow-sm mt-4 w-100 mx-2">
                        <!-- media -->
                        <div class="flex w-auto md:w-1/3 relative overflow-hidden">
                            <img class="inset-0 h-full w-full object-cover object-center scale-100 hover:scale-150 ease-in duration-300 rounded-full shadow-2xl dark:shadow-gray-800"
                                src="/img/{{ $show->sickness_image }}" />
                        </div>
                        <!-- content -->
                        <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                            <h3
                                class="leading-tight truncate mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-black">
                                {{ $show->sickness_name }}</h3>
                            <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            <h5
                                class="leading-tight truncate mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-black">
                                Sickness Description</h5>
                            {!! $show->sickness_description !!}
                            </p>
                            <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            <h5
                                class="leading-tight truncate mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-black">
                                Sickness Solution</h5>
                            {!! $show->sickness_solution !!}
                            </p>
                            <p class="text-sm text-gray-700 uppercase tracking-wide font-semibold mt-2">
                            <h5
                                class="leading-tight truncate mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-black">
                                Medicine</h5>
                            {{ $show->medicine->medicine_name }}
                            </p>
                        </div>
                    </div>
                    <!--/ card-->
                </div>
            @endforeach
            <p class=" text-white text-opacity-100 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a
                galley of type of typeof typeof typeof typeof typeof typeof type </p>
        </div>
    </div>
@endsection
