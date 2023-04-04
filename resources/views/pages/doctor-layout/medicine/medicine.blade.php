@extends('pages.layout.layout')
@section('content')
    <div class="container relative overflow-x-auto shadow-md sm:rounded-lg md:mx-auto mt-20">
        <button data-modal-target="create-medicine-modal" data-modal-toggle="create-medicine-modal"
            class="flex items-center justify-center pointer-events bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 rounded mt-5 ml-5">
            <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
            Create Data
        </button>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <h1 class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our Medicine

            </h1>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 p-10">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Medicine&nbspNama
                    </th>
                    <th scope="col" class="px-80 py-3">
                        Medicine&nbspInformation
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                    <th scope="col" class="px-48 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($medicines as $medicine)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-1 whitespace-nowrap">
                            {{ $no++ }}
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $medicine->medicine_name }}
                        </td>
                        <td class="px-80 py-4">
                            {{ $medicine->medicine_information }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" type="button"
                            {{-- href="{$medicine->id}}" --}}
                            data-modal-target="update-medicine-modal{{$medicine->id}}" data-modal-toggle="update-medicine-modal{{$medicine->id}}"
                                class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                Edit
                            </a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('delete_medicine', ['id' => $medicine->id]) }}"
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

    <!-- Modal toggle -->
    {{-- <button data-modal-target="create-medicine-modal" data-modal-toggle="create-medicine-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}

    <!-- Main modal -->
    <div id="create-medicine-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="create-medicine-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Input Data Medicine</h3>
                    <form class="space-y-6" method="POST" action="{{ route('store_medicine') }}">
                        @csrf
                        <div>
                            <label for="medicine_name"
                                class="block text-sm  font-medium text-gray-400 dark:text-white">
                                Medicine Name</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <img src="{{ URL('img/title.png') }}" alt=""
                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                <input type="text" name="medicine_name" placeholder="Input Medicine Name" autocomplete="off"
                                    aria-label="Input Table"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                            </div>
                        </div>
                        <div>
                            <label for="medicine_information"
                                class="block text-sm  font-medium text-gray-400 dark:text-white">
                                Medicine Information</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <img src="{{ URL('img/title.png') }}" alt=""
                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                <input type="text" name="medicine_information" placeholder="Input Medicine Information" autocomplete="off"
                                    aria-label="Input Table"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="update-medicine-modal{{$medicine->id}}" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="update-medicine-modal{{$medicine->id}}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Input Data Medicine</h3>
                    <form class="space-y-6" method="POST" action="{{ route('update_medicine',$medicine->id) }}">
                        @method('PUT')
                        @csrf
                        <input type="hidden" value="{{ $medicine->id }}" name="id_medicine">
                        <div>
                            <label for="medicine_name"
                                class="block text-sm  font-medium text-gray-400 dark:text-white">
                                Medicine Name</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <img src="{{ URL('img/title.png') }}" alt=""
                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                <input type="text" name="medicine_name" placeholder="Input Medicine Name" autocomplete="off"
                                    aria-label="Input Table" value="{{ $medicine->medicine_name}}"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                            </div>
                        </div>
                        <div>
                            <label for="medicine_information"
                                class="block text-sm  font-medium text-gray-400 dark:text-white">
                                Medicine Information</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <img src="{{ URL('img/title.png') }}" alt=""
                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                <input type="text" name="medicine_information" placeholder="Input Medicine Information" autocomplete="off"
                                    aria-label="Input Table" value="{{ $medicine->medicine_information }}"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
