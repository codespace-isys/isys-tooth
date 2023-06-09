@extends('pages.layout.layout')
@section('content')
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 mt-10 shadow-2xl ">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('regulation-doctor') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/rules_black.png') }}" class="w-4 h-4 mr-2 fill-black" fill="currentColor"
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
                            <a href="{{ route('edit-regulation', ['id' => $Sickness->id]) }}"
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
            <form action="{{ route('update-regulation', ['id' => $Sickness->id]) }}" method="POST"
                enctype="multipart/form-data" class="w-full max-w-screen-2xl mt-10">
                @csrf
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
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('indication_id') ? 'block text-sm font-medium text-red-700 dark:text-red-500 mt-5' : '' }}">Indication</label>
                <div class="flex">
                    <div id="states-button" data-dropdown-toggle="dropdown-states"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600{{ $errors->has('indication_id') ? 'flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-red-500 bg-red-100 border border-red-300 rounded-l-lg hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 dark:bg-red-700 dark:hover:bg-red-600 dark:focus:ring-red-700 dark:text-white dark:border-red-600' : '' }}"
                        type="button">
                        @if ($errors->has('indication_id'))
                            <img src="{{ URL('img/symptom_red.png') }}" class="h-5 mr-2">
                            </img>
                        @endif
                        @if (!$errors->has('indication_id'))
                            <img src="{{ URL('img/symptom.png') }}" class="h-5 mr-2">
                            </img>
                        @endif
                        Indication
                    </div>
                    <select name="indication_id[]" class="indication_id" id="indication_id" style='width: 100%;' multiple>
                        @foreach ($indications as $indication)
                            <option value="{{ $indication->id }}"
                                @foreach ($Sickness->indication as $value)
                                    @if ($indication->id == $value->id)
                                        selected
                                    @endif @endforeach>
                                {{ $indication->indication }}</option>
                        @endforeach
                    </select>
                </div>
                @error('indication_id')
                    <p class="text-sm text-red-600 mb-5 text-left dark:text-red-500"><span
                            class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-10">
                    <img src="{{ URL('img/save-data.png') }}" fill="currentColor" class="w-4 h-4 mr-2 rounded"></img>
                    <span>Update Data</span>
                </button>
            </form>
            <p class=" text-white text-opacity-100 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries,</p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#indication_id").select2({
                placeholder: "Select a state",
                allowClear: true,
            });
        });
    </script>
@endsection
