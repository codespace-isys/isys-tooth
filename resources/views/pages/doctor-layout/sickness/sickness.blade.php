@extends('pages.layout.layout')
@section('content')
    <div class="container relative w-full overflow-x-auto shadow-md sm:rounded-lg md:mx-auto mt-20">
        <a href="{{ route('create-sickness-doctor') }}"
            class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 rounded mt-5 ml-5">
            <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
            Create Data
        </a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <h1 class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our Article

            </h1>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sickness Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sickness Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sickness Solution
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sickness Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Medicine Name
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
                        <td class="px-6 py-1">
                            {{ $no++ }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sickness->sickness_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sickness->sickness_description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $sickness->sickness_solution }}
                        </td>
                        <td class="px-6 py-4">
                            <img src="/img/{{ $sickness->sickness_image }}" alt="">
                        </td>
                        <td class="px-6 py-4">
                            {{ $sickness->medicine->medicine_name }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('edit-sickness', ['id' => $sickness->id]) }}"
                                class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                Edit
                            </a>
                        </td>
                        <td class="px-6 py-4 text-right">
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
    </div>
@endsection
