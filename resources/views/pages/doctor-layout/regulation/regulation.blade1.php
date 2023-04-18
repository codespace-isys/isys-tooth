@extends('pages.layout.layout')
@section('content')
    <button data-modal-target="create-modal" data-modal-toggle="create-modal"
        class="flex items-center justify-center pointer-events bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 mt-5 ml-16 mb-3 rounded"
        id="create-regulation-modal">
        <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
        Create Data
    </button>
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto mb-10">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="example" class="w-full" style="width: 100%; padding-top: 1em; padding-bottom: 1em;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="w-auto px-4 py-4">
                            No
                        </th>
                        <th scope="col" class="w-auto px-1 py-3">
                            regulation Nama
                        </th>
                        <th scope="col" class="w-auto px-1 py-3">
                            regulation Information
                        </th>
                        <th scope="col" class="w-auto px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center" id="table-regulation">
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($regulations as $regulation)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-auto px-4 py-4">
                                {{ $no++ }}
                            </td>
                            <td class="w-auto px-1 py-1">
                                {{ $regulation->sickness->sickness_name }}
                            </td>
                            <td class="w-auto px-1 py-1">
                                {{ $regulation->indication->indication }}
                            </td>
                            <td class="w-auto px-1 py-1 flex flex-row justify-center">
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
                                <a href="{{ route('delete_regulation', ['id' => $regulation->id]) }}"
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
    <!-- Main modal -->
    <div id="create-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-hide="create-modal">
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
                    <div class="mt-5">
                        <label for="regulation_name" class="block text-sm  font-medium text-gray-400 dark:text-white">
                            Sickness Name</label>
                        <select id="sickness_id" name="sickness_id" style='width: 100%;'>
                            <option selected disabled>Choose a Sickness</option>
                            @foreach ($sicknesses as $sickness)
                                <option value="{{ $sickness->id }}">{{ $sickness->sickness_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="regulation_information"
                            class="block text-sm  font-medium text-gray-400 dark:text-white">
                            Indication</label>
                        <select name="indication_id[]" class="indication_id" id="indication_id" style='width: 100%;'
                            multiple>
                            @foreach ($indications as $indication)
                                <option value="{{ $indication->id }}">{{ $indication->indication }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" id="store"
                        class="btn-submit w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 mt-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Store
                        Data</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        //button create post event
        $(document).ready(function() {
            $("#sickness_id").select2();
            $(".indication_id").select2({
                placeholder: "Select a state",
                allowClear: true,
            });
        });
        $('body').on('click', '#create-regulation-modal', function() {

            //open modal
            $('#create-modal').modal('show');
        });

        //action create post
        $('#store').click(function(e) {
            e.preventDefault();

            //define variable
            let sickness_id = $('#sickness_id').val();
            let indication_id = $('#indication_id').val();
            let token = $("meta[name='csrf-token']").attr("content");

            console.log(sickness_id);
            console.log(indication_id);
            //ajax
            $.ajax({

                url: `/pages/doctor-layout/regulation`,
                type: "POST",
                cache: false,
                data: {
                    "sickness_id": sickness_id,
                    "indication_id": indication_id,
                    "_token": token
                },
                success: function(response) {

                    //show success message
                    Swal.fire({
                        type: 'success',
                        icon: 'success',
                        sickness_id: `${response.message}`,
                        indication_id: `${response.message}`,
                        showConfirmButton: false,
                        timer: 3000
                    });

                    //data post
                    let post = `
<tr id="index_${response.data.id}">
    <td>${response.data.sickness_id}</td>
    <td>${response.data.indication_id}</td>
    <td class="text-center">
        <a href="javascriptf:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
        <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
    </td>
</tr>
`;

                    //append to table
                    $('#example').prepend(post);

                    //clear form
                    $('#sickness_id').val('');
                    $('#indication_id').val('');

                    //close modal
                    $('#create-modal').modal('hide');
                },
                error: function(error) {

                    if (error.responseJSON.sickness_id[0]) {

                        //show alert
                        $('#alert-sickness_id').removeClass('d-none');
                        $('#alert-sickness_id').addClass('d-block');

                        //add message to alert
                        $('#alert-sickness_id').html(error.responseJSON.sickness_id[0]);
                    }

                    if (error.responseJSON.indication_id[0]) {

                        //show alert
                        $('#alert-indication_id').removeClass('d-none');
                        $('#alert-indication_id').addClass('d-block');

                        //add message to alert
                        $('#alert-indication_id').html(error.responseJSON.indication_id[0]);
                    }
                }
            });
            // location.reload();
        });
    </script>
@endsection
