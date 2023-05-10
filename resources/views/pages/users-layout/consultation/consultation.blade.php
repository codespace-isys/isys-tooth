@extends('pages.layout.layout')
@section('content')
    @if (Session::has('failed-diagnosis'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Sickness Wasn't Fount",
            })
        </script>
    @endif
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mt-10">
        <div class="flex items-center justify-start"><span
                class="inline-flex justify-center items-center w-12 h-12 rounded-full bg-white text-black dark:bg-slate-900/70 dark:text-white mr-3">
                <img src="{{ URL('img/doctor-consultation-black.png') }}" viewBox="0 0 24 24" width="24" height="24"
                    class="inline-block">

                </img></span>
            <h1 class="leading-tight font-bold text-4xl">Diagnosis</h1>
        </div>
    </div>
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-w-11/12 mx-auto px-2 mb-10 mt-10 shadow-2xl">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('consultation-users') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/doctor-consultation-black.png') }}" class="w-4 h-4 mr-2 fill-black"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Diagnosis
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
                Diagnosis Sickness</h2>
            <form action="{{ route('cek-diagnosis') }}" method="POST">
                @csrf
                @foreach ($indications as $indication)
                    <ul
                        class="list-discs rounded-lg block w-full px-4 py-2 border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white mt-4 text-sm font-semibold text-gray-900 bg-white dark:bg-gray-700 dark:text-white shadow-sm">
                        <div class="grid space-y-2">
                            <li id="list-item-1" data-id="{{ $indication->id }}"
                                class="w-full rounded-2xl border-gray-200 rounded-t-lg dark:border-gray-600">
                                <div class="flex items-center">
                                    <div class="flex items-center h-10 relative">
                                        <input id="{{ $indication->id }}" type="checkbox" value="{{ $indication->id }}"
                                            name="indication[]"
                                            class="checkbox cursor-pointer select-none box flex mr-2 h-5 w-5 items-center justify-center rounded-md border">
                                        <label for="vue-checkbox"
                                            class="w-full py-3 ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300">{{ $indication->indication }}</label>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </ul>
                @endforeach
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-10">
                    <img src="{{ URL('img/check-up.png') }}" fill="currentColor" class="w-7 h-7 mr-2 rounded"></img>
                    <span>Check Diagnosis</span>
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
            $('.list-discs li').click(function() {
                var itemId = $(this).data('id');
                var checkbox = $('#' + itemId);
                checkbox.prop('checked', !checkbox.prop('checked'));
            });
        });
    </script>
@endsection
