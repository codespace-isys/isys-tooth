@extends('pages.layout.layout')
@section('content')
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mb-10 mt-10 shadow-2xl">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('articles-admin') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/article_black.png') }}" class="w-4 h-4 mr-2 fill-black" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Article
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
                            <a href="{{ route('update-articles', ['id' => $articles->id]) }}"
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
                Article Update</h2>
            <form action="" method="POST" enctype="multipart/form-data" class="w-full max-w-screen-2xl mt-10">
                @csrf
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('title') ? 'block mb-2 text-xl font-medium text-red-600 dark:text-red-500 mt-5' : '' }}">Title</label>
                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                    @if (!$errors->has('title'))
                        <img src="{{ URL('img/title.png') }}" alt=""
                            class="w-5 h-5 absolute ml-3 pointer-events-none">
                    @endif
                    @if ($errors->has('title'))
                        <img src="{{ URL('img/title_red.png') }}" alt=""
                            class="w-5 h-5 absolute ml-3 pointer-events-none">
                    @endif
                    <input type="text" name="title" placeholder="Input Title" autocomplete="off"
                        value="{{ $articles->title }}" aria-label="Input Table"
                        class="block w-full  pr-3 pl-10 py-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('title') ? 'block w-full  pr-3 pl-10 py-2 font-semibold placeholder-red-500 text-red-500 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                </div>
                @error('title')
                    <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('short_description') ? 'block mb-2 text-xl font-medium text-red-600 dark:text-red-500 mt-5' : '' }}">Short
                    Description</label>
                    <textarea name="short_description" id="myTextarea" cols="30" rows="10">{{ $articles->short_description }}</textarea>
                @error('short_description')
                    <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5">Description</label>
                <textarea name="description" id="myTextarea" cols="30" rows="10">{{ $articles->description }}</textarea>
                @error('description')
                    <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span>
                    </p>
                @enderror
                <label for="large-input"
                    class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5{{ $errors->has('image') ? 'block mb-2 text-xl font-medium text-red-600 dark:text-red-500 mt-5' : '' }}">Image</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" name="image" id="file_input" value="" type="file">
                @if (!$errors->has('image'))
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG,
                        JPG or JPEG (MIN.
                        512x512px).</p>
                @endif
                @error('image')
                    <p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                @enderror
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
@endsection
