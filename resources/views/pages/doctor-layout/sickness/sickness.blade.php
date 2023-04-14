@extends('pages.layout.layout')
@section('content')
    {{-- <div class="container w-full overflow-x-auto shadow-md sm:rounded-lg md:mx-auto mt-20 ml-10">
        <a href="{{ route('create-sickness-doctor') }}"
            class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 rounded mt-5 ml-5">
            <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
            Create Data
        </a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <h1 class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our Sickness

            </h1>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-4">
                        No
                    </th>
                    <th scope="col" class="px-1 py-3">
                        Sickness&nbspName
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Sickness Description
                    </th>
                    <th scope="col" class="px-1 py-3">
                        Sickness Solution
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sickness&nbspImage
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Medicine&nbspName
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($sicknesses as $sickness)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-4">
                            {{ $no++ }}
                        </td>
                        <td class="px-1 py-1">
                            {{ $sickness->sickness_name }}
                        </td>
                        <td class="px-1 py-1">
                            {{ $sickness->sickness_description }}
                        </td>
                        <td class="px-1 py-1">
                            {{ $sickness->sickness_solution }}
                        </td>
                        <td class="px-1 py-1">
                            <img src="/img/{{ $sickness->sickness_image }}" alt="">
                        </td>
                        <td class="px-6 py-4">
                            {{ $sickness->medicine->medicine_name }}
                        </td>
                        <td class="px-1 py-1 text-right">
                            <a href="{{ route('edit-sickness', ['id' => $sickness->id]) }}"
                                class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                Edit
                            </a>
                        </td>
                        <td class="px-1 py-1 text-right">
                            <a href="{{ route('delete-sickness', ['id' => $sickness->id]) }}"
                                class="flex items-center justify-center bg-red-600 hover:bg-red-400 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                <img src="{{ URL('img/trash.png') }}" class="w-5" alt="">
                                Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    
    <div class="overflow-y-auto overflow-x-auto container w-full md:w-5/6 xl:w-5/6 md:h-5/6 mx-auto px-2 mt-32  ">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <a href="{{ route('create-sickness-doctor') }}"
                class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 rounded mb-5">
                <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
                Create Data
            </a>
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">
                            No
                        </th>
                        <th data-priority="2">
                            Sickness&nbspName
                        </th>
                        <th data-priority="3">
                            Sickness Description
                        </th>
                        <th data-priority="4">
                            Sickness Solution
                        </th>
                        <th data-priority="5">
                            Sickness&nbspImage
                        </th>
                        <th data-priority="6">
                            Medicine&nbspName
                        </th>
                        <th data-priority="7">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($sicknesses as $sickness)
                            <td>
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $sickness->sickness_name }}
                            </td>
                            <td>
                                {{ $sickness->sickness_description }}
                            </td>
                            <td>
                                {{ $sickness->sickness_solution }}
                            </td>
                            <td>
                                <img src="/img/{{ $sickness->sickness_image }}" alt="">
                            </td>
                            <td>
                                {{ $sickness->medicine->medicine_name }}
                            </td>
                            <td>
                                <a href="{{ route('edit-sickness', ['id' => $sickness->id]) }}"
                                    class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                    <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                    Edit
                                </a>
                                <a href="{{ route('delete-sickness', ['id' => $sickness->id]) }}"
                                    class="flex items-center justify-center bg-red-600 hover:bg-red-400 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                    <img src="{{ URL('img/trash.png') }}" class="w-5" alt="">
                                    Hapus
                                </a>
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <p class=" text-white text-opacity-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type of typeof typeof typeof typeof typeof typeof type </p>
        </div>
        </div>
@endsection
