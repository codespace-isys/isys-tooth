@extends('pages.layout.layout')
@section('content')
    <div class="container overflow-x-auto shadow-md sm:rounded-lg md:mx-auto mt-20">
        <button data-modal-target="create-regulation-modal" data-modal-toggle="create-regulation-modal"
            class="flex items-center justify-center pointer-events bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 rounded mt-5 ml-5">
            <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
            Create Data
        </button>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <h1 class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Our regulation

            </h1>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 p-10">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        regulation&nbspNama
                    </th>
                    <th scope="col" class="px-80 py-3">
                        regulation&nbspInformation
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
                @foreach ($regulations as $regulation)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-1 whitespace-nowrap">
                            {{ $no++ }}
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $regulation->sickness->sickness_name }}
                        </td>
                        <td class="px-80 py-4">
                            {{ $regulation->indication->indication   }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" type="button"
                                data-modal-target="update-regulation-modal{{ $regulation->id }}"
                                data-modal-toggle="update-regulation-modal{{ $regulation->id }}"
                                class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                Edit
                            </a>
                            {{-- <div id="update-regulation-modal{{ $regulation->id }}" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                <div class="relative w-full h-full max-w-md md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-hide="update-regulation-modal{{ $regulation->id }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-semibold text-left text-gray-900 dark:text-white">
                                                Edit Data regulation</h3>
                                            <form class="space-y-6" method="POST"
                                                action="{{ route('update_regulation', $regulation->id) }}">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" value="{{ $regulation->id }}" name="id_regulation">
                                                <div>
                                                    <label for="regulation_name"
                                                        class="block text-sm text-left font-medium text-gray-400 dark:text-white">
                                                        regulation Name</label>
                                                    <div
                                                        class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                        <img src="{{ URL('img/regulation-input.png') }}" alt=""
                                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                        <input type="text" name="regulation_name"
                                                            placeholder="Input regulation Name" autocomplete="off"
                                                            aria-label="Input Table"
                                                            value="{{ $regulation->regulation_name }}"
                                                            class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="regulation_information"
                                                        class="block text-sm text-left font-medium text-gray-400 dark:text-white">
                                                        regulation Information</label>
                                                    <div
                                                        class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                        <img src="{{ URL('img/title.png') }}" alt=""
                                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                        <input type="text" name="regulation_information"
                                                            placeholder="Input regulation Information" autocomplete="off"
                                                            aria-label="Input Table"
                                                            value="{{ $regulation->regulation_information }}"
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
                            </div> --}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            {{-- <a href="{{ route('delete_regulation', ['id' => $regulation->id]) }}"
                                class="flex items-center justify-center bg-red-600 hover:bg-red-400 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
                                <img src="{{ URL('img/trash.png') }}" class="w-5" alt="">
                                Hapus
                            </a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal toggle -->
    {{-- <button data-modal-target="create-regulation-modal" data-modal-toggle="create-regulation-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
  </button> --}}

    <!-- Main modal -->
    <div id="create-regulation-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="create-regulation-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Input Data regulation</h3>
                    <form class="space-y-6" method="POST" action="">
                        @csrf
                        <div>
                            <label for="regulation_name" class="block text-sm  font-medium text-gray-400 dark:text-white">
                                regulation Name</label>
                            <select id="selUser" name="sickness_id" style='width: 100%;'>
                                <option selected disabled>Choose a Sickness</option>
                                @foreach ($sicknesses as $sickness)
                                    <option value="{{ $sickness->id }}">{{ $sickness->sickness_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="regulation_information"
                                class="block text-sm  font-medium text-gray-400 dark:text-white">
                                Regulation</label>
                            <select id="indication_id" name="indication_id[]" style='width: 100%;' class="indicatiion_id" multiple='multiple'>
                                {{-- @foreach ($indications as $indication)
                                    <option value="{{ $indication->id }}">{{ $indication->indication }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store
                            Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selUser").select2();
            // $('.indicatiion_id').select2{(
               
            // )};
            $("#indication_id").select2({
                placeholder : "Choose a Indication",
                allowClear : true,
                ajax:{
                    url:"{{ route('get_indication')}}",
                    type:"post",
                    dataType:'json',
                    data: function(params){
                        return{
                            indication:params.term,
                            "_token" : "{{ csrf_token() }}",
                        };
                    },
                    // processResults:function(data){
                    //     return{
                    //         results: $.map(data,function (item){
                    //             sickness_id:item.sickness_id,
                    //             indication_id:item.indication_id,
                    //         })
                    //     }
                    // }
                }
            });
        });
    </script>
@endsection
