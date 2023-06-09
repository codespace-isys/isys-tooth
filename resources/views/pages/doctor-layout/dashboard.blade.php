@extends('pages.layout.layout')
@section('content')
    @if ($message = Session('login-doctor'))
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
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mt-10">
        <div class="flex items-center justify-start"><span
                class="inline-flex justify-center items-center w-12 h-12 rounded-full bg-white text-black dark:bg-slate-900/70 dark:text-white mr-3">
                <img src="{{ URL('img/home_black.png') }}" viewBox="0 0 24 24" width="24" height="24"
                    class="inline-block">

                </img></span>
            <h1 class="leading-tight font-bold text-4xl">Dashboard</h1>
        </div>
    </div>


    <div class=" mt-8 grid lg:grid-cols-4 sm:grid-cols-2 p-4 gap-10 mr-14 ml-14">
        <div class="bg-white flex  rounded-2xl flex-col dark:bg-slate-900/70">
            <div class="flex-1 p-6 undefined">
                <div class="flex items-center justify-between mb-3">
                    <div
                        class="inline-flex items-center capitalize leading-none text-xs border rounded-full py-1 px-3 bg-blue-500 border-blue-500 text-white ">
                        <span class="inline-flex justify-center items-center w-4 h-4 mr-1">
                            <img src="{{ URL('img/arrow-right.png') }}" width="10" height="14" class="inline-block">
                            <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z">
                            </path>
                            </img>
                        </span>
                        <span>Count</span>
                    </div>
                    <a href="{{ route('medicine-doctor') }}"
                        class="inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-gray-100 dark:border-slate-800 ring-gray-200 dark:ring-gray-500 bg-gray-100 text-black dark:bg-slate-800 dark:text-white hover:bg-gray-200 hover:dark:bg-slate-700  p-1">
                        <span class="inline-flex justify-center items-center w-6 h-6 ">
                            <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                <path fill="currentColor"
                                    d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Medicine</h3>
                        <h1 class="text-3xl leading-tight font-semibold">
                            <div>{{ $countMedicines }}</div>
                        </h1>
                    </div>
                    <span class="inline-flex justify-center items-center  h-16 text-blue-500">
                        <img src="{{ URL('img/medicine_blue.png') }}" width="48" height="48" class="inline-block">
                        </img>
                    </span>
                </div>
            </div>
        </div>
        <div class="bg-white flex rounded-2xl flex-col dark:bg-slate-900/70">
            <div class="flex-1 p-6 undefined">
                <div class="flex items-center justify-between mb-3">
                    <div
                        class="inline-flex items-center capitalize leading-none text-xs border rounded-full py-1 px-3 bg-green-500 border-green-500 text-white ">
                        <span class="inline-flex justify-center items-center w-4 h-4 mr-1">
                            <img src="{{ URL('img/arrow-right.png') }}" width="10" height="14" class="inline-block">
                            <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z">
                            </path>
                            </img>
                        </span>
                        <span>Count</span>
                    </div>
                    <a href="{{ route('indication-doctor') }}"
                        class="inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-gray-100 dark:border-slate-800 ring-gray-200 dark:ring-gray-500 bg-gray-100 text-black dark:bg-slate-800 dark:text-white hover:bg-gray-200 hover:dark:bg-slate-700  p-1">
                        <span class="inline-flex justify-center items-center w-6 h-6 ">
                            <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                <path fill="currentColor"
                                    d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Indication</h3>
                        <h1 class="text-3xl leading-tight font-semibold">
                            <div>{{ $countIndications }}</div>
                        </h1>
                    </div>
                    <span class="inline-flex justify-center items-center  h-16 text-green-500">
                        <img src="{{ URL('img/diagnosis_ijo.png') }}" width="48" height="48" class="inline-block">
                        </img>
                    </span>
                </div>
            </div>
        </div>
        <div class="bg-white flex  rounded-2xl flex-col dark:bg-slate-900/70">
            <div class="flex-1 p-6 undefined">
                <div class="flex items-center justify-between mb-3">
                    <div
                        class="inline-flex items-center capitalize leading-none text-xs border rounded-full py-1 px-3 bg-red-500 border-red-500 text-white ">
                        <span class="inline-flex justify-center items-center w-4 h-4 mr-1">
                            <img src="{{ URL('img/arrow-right.png') }}" width="10" height="14" class="inline-block">
                            <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z">
                            </path>
                            </img>
                        </span>
                        <span>Count</span>
                    </div>
                    <a href="{{ route('sickness-doctor') }}"
                        class="inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-gray-100 dark:border-slate-800 ring-gray-200 dark:ring-gray-500 bg-gray-100 text-black dark:bg-slate-800 dark:text-white hover:bg-gray-200 hover:dark:bg-slate-700  p-1">
                        <span class="inline-flex justify-center items-center w-6 h-6 ">
                            <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                <path fill="currentColor"
                                    d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Sickness</h3>
                        <h1 class="text-3xl leading-tight font-semibold">
                            <div>{{ $countSicknesses }}</div>
                        </h1>
                    </div>
                    <span class="inline-flex justify-center items-center  h-16 text-red-500">
                        <img src="{{ URL('img/virus_pink.png') }}" width="48" height="48" class="inline-block">
                        </img>
                    </span>
                </div>
            </div>
        </div>
        <div class="bg-white flex  rounded-2xl flex-col dark:bg-slate-900/70">
            <div class="flex-1 p-6 undefined">
                <div class="flex items-center justify-between mb-3">
                    <div
                        class="inline-flex items-center capitalize leading-none text-xs border rounded-full py-1 px-3 bg-yellow-300 border-yellow-300 text-white ">
                        <span class="inline-flex justify-center items-center w-4 h-4 mr-1">
                            <img src="{{ URL('img/arrow-right.png') }}" width="10" height="14"
                                class="inline-block">
                            <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z">
                            </path>
                            </img>
                        </span>
                        <span>Count</span>
                    </div>
                    <a href="{{ route('regulation-doctor') }}"
                        class="inline-flex justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border cursor-pointer rounded border-gray-100 dark:border-slate-800 ring-gray-200 dark:ring-gray-500 bg-gray-100 text-black dark:bg-slate-800 dark:text-white hover:bg-gray-200 hover:dark:bg-slate-700  p-1">
                        <span class="inline-flex justify-center items-center w-6 h-6 ">
                            <svg viewBox="0 0 24 24" width="16" height="16" class="inline-block">
                                <path fill="currentColor"
                                    d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg leading-tight text-gray-500 dark:text-slate-400">Regulation</h3>
                        <h1 class="text-3xl leading-tight font-semibold">
                            <div>{{ $countSicknesses }}</div>
                        </h1>
                    </div>
                    <span class="inline-flex justify-center items-center  h-16 text-yebg-yellow-300">
                        <img src="{{ URL('img/rules_yellow.png') }}" width="48" height="48"
                            class="inline-block">
                        </img>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 mt-10 rounded-2xl">
        <div class="p-8 mt-6 lg:mt-0 shadow-2xl bg-white rounded-2xl">
            <h2 class="mb-10 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                Sickness Table</h2>
            <table id="example" class="w-full" style="width: 100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-1 px-4 py-4">
                            No
                        </th>
                        <th scope="col" class="w-10 px-1 py-3">
                            Sickness Name
                        </th>
                        <th scope="col" class="w-40 px-1 py-3">
                            Sickness Description
                        </th>
                        <th scope="col" class="w-40 px-1 py-3">
                            Sickness Solution
                        </th>
                        <th scope="col" class="w-1 px-6 py-3">
                            Sickness Image
                        </th>
                        <th scope="col" class="w-1 px-6 py-3">
                            Medicine Name
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($sicknesses as $sickness)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-1 px-4 py-4">
                                {{ $no++ }}
                            </td>
                            <td class="w-20 px-1 py-1">
                                {{ $sickness->sickness_name }}
                            </td>
                            <td class="w-40 px-1 py-1">
                                {!! Str::limit($sickness->sickness_description, '50', '...') !!}
                            </td>
                            <td class="w-1 px-1 py-1">
                                {!! Str::limit($sickness->sickness_solution, '50', '...') !!}
                            </td>
                            <td class="w-1 px-1 py-1">
                                <img src="/img/{{ $sickness->sickness_image }}" alt="">
                            </td>
                            <td class="w-1 px-6 py-4">
                                @foreach ($sickness->medicines as $medicine)
                                    <ul class="max-w-xs flex flex-col divide-y divide-gray-200 dark:divide-gray-700">
                                        <li
                                            class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-medium text-gray-800 dark:text-white">
                                            <img src="{{ URL('img/fast-forward.png') }}" alt="" class="mt-1"
                                                width="10%">{{ $medicine->medicine_name }}
                                        </li>
                                    </ul>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class=" text-white text-opacity-100 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a
                galley of type of typeof typeof typeof typeof typeof typeof type </p>
        </div>
    </div>
@endsection
