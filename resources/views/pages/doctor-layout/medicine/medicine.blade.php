@extends('pages.layout.layout')
@section('content')
    <button data-modal-target="create-medicine-modal" data-modal-toggle="create-medicine-modal" id="button_id"
        class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 mt-5 ml-16 rounded">
        <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
        Create Data
    </button>
    @if ($errors->has('medicine_name_store') || $errors->has('medicine_information_store'))
        <script>
            function myFunction() {
                document.getElementById("button_id").value = "Clicked";
            }
            setTimeout(function() {
                document.getElementById("button_id").click();
            }, 500);
        </script>
    @endif
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 mt-5 shadow-2xl">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('medicine-doctor') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/medicine_black.png') }}" class="w-4 h-4 mr-2 fill-black"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Medicine
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
                Medicine Table</h2>
            @if ($errors->has('medicine_name'))
                <div id="alert-border-2"
                    class="flex p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3 text-sm font-medium">
                        {{ $errors->first('medicine_name') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif
            @if ($errors->has('medicine_information'))
                <div id="alert-border-2"
                    class="flex p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800"
                    role="alert">
                    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3 text-sm font-medium">
                        {{ $errors->first('medicine_information') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif
            <table id="example" class="w-full" style="width: 100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-20 px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="w-96 px-6 py-3">
                            Medicine&nbspNama
                        </th>
                        <th scope="col" class="w-96 px-6 py-3">
                            Medicine&nbspInformation
                        </th>
                        <th scope="col" class="w-44 px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($medicines as $medicine)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-20 px-6 py-1 whitespace-nowrap">
                                {{ $no++ }}
                            </td>
                            <td class="w-96 px-6 py-4 ">
                                {{ $medicine->medicine_name }}
                            </td>
                            <td class="w-96 px-80 py-4">
                                {{ $medicine->medicine_information }}
                            </td>
                            <td class="w-52 px-6 py-4 text-right grid grid-cols-2">
                                <a href="#" type="button"
                                    data-modal-target="update-medicine-modal{{ $medicine->id }}"
                                    data-modal-toggle="update-medicine-modal{{ $medicine->id }}"
                                    class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-24 font-bold py-2 px-4 rounded mt-5 ml-5">
                                    <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                    Update
                                </a>
                                <div id="update-medicine-modal{{ $medicine->id }}" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                    <div class="relative w-full h-full max-w-md md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-hide="update-medicine-modal{{ $medicine->id }}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="px-6 py-6 lg:px-8">
                                                <h3
                                                    class="mb-4 text-xl font-semibold text-left text-gray-900 dark:text-white">
                                                    Update Data Medicine</h3>
                                                <form class="space-y-6" method="POST"
                                                    action="{{ route('update_medicine', $medicine->id) }}">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" value="{{ $medicine->id }}"
                                                        name="id_medicine">
                                                    <div>
                                                        <label for="medicine_name"
                                                            class="block text-sm text-left font-medium text-gray-400 dark:text-white{{ $errors->has('medicine_name') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                            Medicine Name</label>
                                                        <div
                                                            class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                            @if ($errors->has('medicine_name'))
                                                                <img src="{{ URL('img/tooth-with-a-plus-sign-outlines-red.png') }}"
                                                                    alt=""
                                                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            @endif
                                                            @if (!$errors->has('medicine_name'))
                                                                <img src="{{ URL('img/tooth-with-a-plus-sign-outlines.png') }}"
                                                                    alt=""
                                                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            @endif
                                                            <input type="text" name="medicine_name"
                                                                placeholder="Input Medicine Name" autocomplete="off"
                                                                aria-label="Input Table"
                                                                value="{{ $medicine->medicine_name }}"
                                                                class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('medicine_name') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                                        </div>
                                                        @error('medicine_name')
                                                            <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                                                    class="font-medium">{{ $message }}</span>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <label for="medicine_information"
                                                            class="block text-sm text-left font-medium text-gray-400 dark:text-white{{ $errors->has('medicine_information') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                            Medicine Information</label>
                                                        <div
                                                            class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                            @if ($errors->has('medicine_information'))
                                                                <img src="{{ URL('img/leaflet_red.png') }}"
                                                                    alt=""
                                                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            @endif
                                                            @if (!$errors->has('medicine_information'))
                                                                <img src="{{ URL('img/leaflet.png') }}" alt=""
                                                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            @endif
                                                            <input type="text" name="medicine_information"
                                                                placeholder="Input Medicine Information"
                                                                autocomplete="off" aria-label="Input Table"
                                                                value="{{ $medicine->medicine_information }}"
                                                                class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('medicine_information') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                                        </div>
                                                        @error('medicine_information')
                                                            <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                                                    class="font-medium">{{ $message }}</span>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    <button type="submit"
                                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                                                        Data</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" data-id_medicine="{{ $medicine->id }}"
                                    class="btn-delete-medicine flex items-center justify-center bg-red-600 hover:bg-red-400 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
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
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('medicine_name_store') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Medicine Name</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if ($errors->has('medicine_name_store'))
                                    <img src="{{ URL('img/tooth-with-a-plus-sign-outlines-red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                @if (!$errors->has('medicine_name_store'))
                                    <img src="{{ URL('img/tooth-with-a-plus-sign-outlines.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                <input type="text" name="medicine_name_store" placeholder="Input Medicine Name"
                                    autocomplete="off" aria-label="Input Table" value="{{ old('medicine_name_store') }}"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('medicine_name_store') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                            </div>
                            @error('medicine_name_store')
                                <p class="text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="medicine_information"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('medicine_information_store') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Medicine Information</label>
                            <div
                                class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if ($errors->has('medicine_information_store'))
                                    <img src="{{ URL('img/leaflet_red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                @if (!$errors->has('medicine_information_store'))
                                    <img src="{{ URL('img/leaflet.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                <input type="text" name="medicine_information_store" value="{{ old('medicine_information_store') }}"
                                    placeholder="Input Medicine Information" autocomplete="off" aria-label="Input Table"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('medicine_information_store') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                            </div>
                            @error('medicine_information_store')
                                <p class="text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store
                            Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session('success-store-medicine'))
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
    @if ($message = Session('success-update-medicine'))
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
    <script>
        $("body").on('click', '.btn-delete-medicine', function() {
            const id = $(this).data("id_medicine");
            console.log(id);
            const swalWithTailwindButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'text-green-700 hover:text-white border border-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800',
                    cancelButton: 'text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900'
                },
                buttonsStyling: false
            })

            swalWithTailwindButtons.fire({
                title: 'Are you sure?',
                text: "You won't be deleted this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/pages/doctor-layout/medicine/${id}`).then(() => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Your data has been deleted',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            window.location.reload();
                        }, 1500);
                    });

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithTailwindButtons.fire(
                        "Canceled!",
                        "You canceled delete data",
                        "error"
                    )
                }
            })
        })
    </script>
@endsection
