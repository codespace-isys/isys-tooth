@extends('pages.layout.layout')
@section('content')
    <button data-modal-target="create-indication-modal" data-modal-toggle="create-indication-modal"
        class="flex items-center justify-center pointer-events bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 rounded mt-5 ml-16">
        <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
        Create Data
    </button>
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 mt-5 shadow-2xl">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route("indication-doctor") }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/diagnosis_black.png') }}" class="w-4 h-4 mr-2 fill-black" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Indication
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
                Indication Table</h2>
            <table id="example" class="w-full" style="width: 100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-20 px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="w-96 px-6 py-3">
                            Code&nbspIndication
                        </th>
                        <th scope="col" class="w-96 px-6 py-3">
                            Indication&nbsp
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
                    @foreach ($indications as $indication)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-20 px-6 py-1 whitespace-nowrap">
                                {{ $no++ }}
                            </td>
                            <td class="w-96 px-6 py-4 ">
                                {{ $indication->code_indication }}
                            </td>
                            <td class="w-96 px-80 py-4">
                                {{ $indication->indication }}
                            </td>
                            <td class="w-52 px-6 py-4 text-right grid grid-cols-2">
                                <a href="#" type="button"
                                    data-modal-target="update-indication-modal{{ $indication->id }}"
                                    data-modal-toggle="update-indication-modal{{ $indication->id }}"
                                    class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-24 font-bold py-2 px-4 rounded mt-5 ml-5">
                                    <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                    Update
                                </a>
                                <div id="update-indication-modal{{ $indication->id }}" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                    <div class="relative w-full h-full max-w-md md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                data-modal-hide="update-indication-modal{{ $indication->id }}">
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
                                                    Update Data indication</h3>
                                                <form class="space-y-6" method="POST"
                                                    action="{{ route('update_indication', $indication->id) }}">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" value="{{ $indication->id }}"
                                                        name="id_indication">
                                                    <div>
                                                        <label for="indication_name"
                                                            class="block text-sm text-left font-medium text-gray-400 dark:text-white">
                                                            Code Indication</label>
                                                        <div
                                                            class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                            <img src="{{ URL('img/code_indication.png') }}" alt=""
                                                                class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            <input type="text" name="code_indication"
                                                                placeholder="Input indication Name" autocomplete="off"
                                                                aria-label="Input Table"
                                                                value="{{ $indication->code_indication }}" readonly
                                                                class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="indication_information"
                                                            class="block text-sm text-left font-medium text-gray-400 dark:text-white">
                                                            Indication</label>
                                                        <div
                                                            class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                            <img src="{{ URL('img/symptom.png') }}" alt=""
                                                                class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            <input type="text" name="indication"
                                                                placeholder="Input indication" autocomplete="off"
                                                                aria-label="Input Table"
                                                                value="{{ $indication->indication }}"
                                                                class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                                                        Data</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('delete_indication', ['id' => $indication->id]) }}"
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

    <!-- Modal toggle -->
    {{-- <button data-modal-target="create-indication-modal" data-modal-toggle="create-indication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}

    <!-- Main modal -->
    <div id="create-indication-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="create-indication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Input Data indication</h3>
                    <form class="space-y-6" method="POST" action="{{ route('store_indication') }}">
                        @csrf
                        <div>
                            <label for="code_indication" class="block text-sm  font-medium text-gray-400 dark:text-white">
                                Code Indication</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <img src="{{ URL('img/code_indication.png') }}" alt=""
                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                <input type="text" name="code_indication" placeholder="Input Code Indication"
                                    autocomplete="off" aria-label="Input Table" value="{{ $format }}" readonly
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                            </div>
                        </div>
                        <div>
                            <label for="indication" class="block text-sm  font-medium text-gray-400 dark:text-white">
                                Indication </label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <img src="{{ URL('img/symptom.png') }}" alt=""
                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                <input type="text" name="indication" placeholder="Input indication "
                                    autocomplete="off" aria-label="Input Table"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store
                            Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
