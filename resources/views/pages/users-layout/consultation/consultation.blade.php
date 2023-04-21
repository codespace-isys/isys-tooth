@extends('pages.layout.layout')
@section('content')
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 shadow-2xl">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('articles-admin') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/article_black.png') }}" class="w-4 h-4 mr-2 fill-black" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Consultation
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
                Consultation Page</h2>

            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Diagnosis Sickness</h3>
            <ul
                class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <form action="{{ route('cek-diagnosis') }}" method="POST">
                    @csrf
                    @foreach ($indications as $indication)
                        <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="vue-checkbox" type="checkbox" value="{{ $indication->id }}" name="indication[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="vue-checkbox"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $indication->indication }}</label>
                            </div>
                        </li>
                    @endforeach
                    <button type="submit">cek</button>
                </form>
            </ul>
            {{-- @foreach ($indications as $indication1)
                @foreach ($sicknesses as $sickness)
                    @foreach ($sickness->indication as $value)
                        @if ($indication->id == $value->id)
                        @foreach ($indication->Sickness as $value1)
                            @if ($value1->sickness_name == $sickness->sickness_name)
                                {{ $value1 }}
                            @endif
                        @endforeach
                        @endif
                    @endforeach
                @endforeach
            @endforeach --}}
            <p class=" text-white text-opacity-100 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a
                galley of type of typeof typeof typeof typeof typeof typeof type </p>
        </div>
    </div>
@endsection
