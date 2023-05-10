@extends('pages.layout.layout')
@section('content')

<div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 shadow-2xl">
    <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <div class="flex mb-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('sickness-doctor') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <img src="{{ URL('img/virus_black.png') }}" class="w-4 h-4 mr-2 fill-black" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        </img>
                        Result
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </li>
            </ol>
        </div>
        <h2 class="mb-10 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
            Result Table</h2>
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
                    <th scope="col" class="w-32 px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $no = 1;
                @endphp
                @foreach ($results as $result)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="w-1 px-4 py-4">
                            {{ $no++ }}
                        </td>
                        {{-- <td class="w-20 px-1 py-1">
                            {{ $sickness->sickness_name }}
                        </td>
                        <td class="w-40 px-1 py-1">
                            {{ Str::limit($sickness->sickness_description, '50', '...') }}
                        </td>
                        <td class="w-1 px-1 py-1">
                            {{ Str::limit($sickness->sickness_solution, '50', '...') }}
                        </td>
                        <td class="w-1 px-1 py-1">
                            <img src="/img/{{ $sickness->sickness_image }}" alt="">
                        </td>
                        <td class="w-1 px-6 py-4">
                            {{ $sickness->medicine->medicine_name }}
                        </td> --}}
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