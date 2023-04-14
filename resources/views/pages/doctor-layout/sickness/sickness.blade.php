@extends('pages.layout.layout')
@section('content')
    <a href="{{ route('create-sickness-doctor') }}"
        class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 mt-5 ml-16 rounded mb-5">
        <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
        Create Data
    </a>
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="example" class="w-full" style="width: 100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-1 px-4 py-4">
                            No
                        </th>
                        <th scope="col" class="w-20 px-1 py-3">
                            Sickness Name
                        </th>
                        <th scope="col" class="w-40 px-1 py-3">
                            Sickness Description
                        </th>
                        <th scope="col" class="w-1 px-1 py-3">
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
                    @foreach ($sicknesses as $sickness)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-1 px-4 py-4">
                                {{ $no++ }}
                            </td>
                            <td class="w-20 px-1 py-1">
                                {{ $sickness->sickness_name }}
                            </td>
                            <td class="w-40 px-1 py-1">
                                {{ Str::limit($sickness->sickness_description, '50', '...') }}
                            </td>
                            <td class="w-1 px-1 py-1">
                                {{ Str::limit($sickness->sickness_solution,'50', '...') }}
                            </td>
                            <td class="w-1 px-1 py-1">
                                <img src="/img/{{ $sickness->sickness_image }}" alt="">
                            </td>
                            <td class="w-1 px-6 py-4">
                                {{ $sickness->medicine->medicine_name }}
                            </td>
                            <td class="w-32 px-1 py-1 text-right grid grid-cols-2 gap-14">
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
