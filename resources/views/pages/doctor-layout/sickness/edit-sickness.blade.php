@extends('pages.layout.layout')
@section('content')
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 mt-10 shadow-2xl ">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('sickness-doctor') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/virus_black.png') }}" class="w-4 h-4 mr-2 fill-black" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Sickness
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
                            <a href="{{ route('edit-sickness', ['id' => $Sickness->id]) }}"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Update</a>
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
                        </div>
                    </li>
                </ol>
            </div>
            <h2 class="mb-10 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">
                Sickness Update</h2>
            <form action="{{ route('update-sickness', ['id' => $Sickness->id]) }}" method="POST"
                enctype="multipart/form-data" class="w-full max-w-screen-2xl mt-10">
                @csrf
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('sickness_code') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">Sickness
                    Code</label>
                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                    @if ($errors->has('sickness_code'))
                        <img src="{{ URL('img/virus_code_red.png') }}" alt=""
                            class="w-5 h-5 absolute ml-3 pointer-events-none">
                    @endif
                    @if (!$errors->has('sickness_code'))
                        <img src="{{ URL('img/virus_code.png') }}" alt=""
                            class="w-5 h-5 absolute ml-3 pointer-events-none">
                    @endif
                    <input type="text" name="sickness_code" placeholder="Input Sickness" autocomplete="off"
                        aria-label="Input Table" value="{{ $Sickness->sickness_code }}" readonly
                        class="block w-full  pr-3 pl-10 py-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('sickness_code') ? 'block w-full pr-3 pl-10 py-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                </div>
                @error('sickness_code')
                    <p class="text-sm text-red-600 mb-5 text-left dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('sickness_name') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">Sickness
                    Name</label>
                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                    @if ($errors->has('sickness_name'))
                        <img src="{{ URL('img/virus_red.png') }}" alt=""
                            class="w-5 h-5 absolute ml-3 pointer-events-none">
                    @endif
                    @if (!$errors->has('sickness_name'))
                        <img src="{{ URL('img/virus.png') }}" alt=""
                            class="w-5 h-5 absolute ml-3 pointer-events-none">
                    @endif
                    <input type="text" name="sickness_name" placeholder="Input Sickness" autocomplete="off"
                        aria-label="Input Table" value="{{ $Sickness->sickness_name }}"
                        class="block w-full  pr-3 pl-10 py-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('sickness_name') ? 'block w-full pr-3 pl-10 py-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                </div>
                @error('sickness_name')
                    <p class="text-sm text-red-600 mb-5 text-left dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('sickness_description') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">Sickness
                    Description</label>
                <textarea name="sickness_description" id="myTextarea2" cols="30" rows="10">{{ $Sickness->sickness_description }}</textarea>
                @error('sickness_description')
                    <p class="text-sm text-red-600 mb-5 text-left dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('sickness_solution') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">Sickness
                    Solution</label>
                <textarea name="sickness_solution" id="myTextarea" cols="30" rows="10">{{ $Sickness->sickness_solution }}</textarea>
                @error('sickness_solution')
                    <p class="text-sm text-red-600 text-left mb-5 dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5">Medicine
                    Name</label>
                <div class="flex">
                    <div id="states-button" data-dropdown-toggle="dropdown-states"
                        class="flex-shrink-0 z-10 inline-flex items-center py-1 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">
                        @if ($errors->has('medicine_id'))
                            <img src="{{ URL('img/tooth-with-a-plus-sign-outlines-red.png') }}" class="h-4 mr-2">
                            </img>
                        @endif
                        @if (!$errors->has('medicine_id'))
                            <img src="{{ URL('img/tooth-with-a-plus-sign-outlines.png') }}" class="h-4 mr-2">
                            </img>
                        @endif
                        Indication
                    </div>
                    <select name="medicine_id[]" class="medicine_id" id="medicine_id" style='width: 100%;' multiple>
                        @foreach ($medicines as $medicine)
                            <option value="{{ $medicine->id }}"
                                @foreach ($Sickness->medicine as $value)
                                    @if ($medicine->id == $value->id)
                                        selected
                                    @endif @endforeach>
                                {{ $medicine->medicine_name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('medicine_id')
                    <p class="text-sm text-red-600 text-left mb-5 dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('sickness_image') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">Sickness
                    Image</label>
                @if (!$errors->has('sickness_image'))
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                @endif
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400{{ $errors->has('sickness_image') ? 'block w-full text-sm text-red-900 border border-red-300 rounded-lg cursor-pointer bg-red-50 dark:text-red-400 focus:outline-none dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400' : '' }}"
                    aria-describedby="file_input_help" name="sickness_image" id="file_input" type="file">
                @if (!$errors->has('sickness_image'))
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG (MIN.
                        512x512px).</p>
                @endif
                @if ($errors->has('sickness_image'))
                    @error('sickness_image')
                        <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                class="font-medium">{{ $message }}</span>
                        </p>
                    @enderror
                @endif
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-10">
                    <img src="{{ URL('img/save-data.png') }}" fill="currentColor" class="w-4 h-4 mr-2 rounded"></img>
                    <span>Update Data</span>
                </button>
            </form>
            <p class=" text-white text-opacity-100 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a
                galley of type of typeof typeof typeof typeof typeof typeof type </p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#selUser").select2();
            $("#medicine_id").select2({
                placeholder: "Select a Medicine",
                allowClear: true,
            });
        });
    </script>
@endsection
