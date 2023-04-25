@extends('pages.layout.layout')
@section('content')
    <button data-modal-target="create-users-modal" data-modal-toggle="create-users-modal" id="button_id" onclick="myFunction()"
        class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 mt-5 ml-16 rounded">
        <img src="{{ URL('img/add.png') }}" class="w-5 mr-2" alt="">
        Create Data
    </button>
    @if (
        $errors->has('first_name') ||
            $errors->has('last_name') ||
            $errors->has('phone') ||
            $errors->has('image') ||
            $errors->has('address') ||
            $errors->has('email') ||
            $errors->has('password'))
        <script>
            function myFunction() {
                document.getElementById("button_id").value = "Clicked";
            }
            setTimeout(function() {
                document.getElementById("button_id").click();
            }, 1000);
        </script>
    @endif
    <div class="container w-full md:w-11/12 xl:w-11/12 md:h-11/12 mx-auto px-2 mt-5 mb-10 shadow-2xl">
        <div class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <div class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('users-admin') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <img src="{{ URL('img/user_black.png') }}" class="w-4 h-4 mr-2 fill-black" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            </img>
                            Users
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
                Users Table</h2>
            @if ($errors->has('first_name_edit'))
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
                        {{ $errors->first('first_name_edit') }}
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
            @if ($errors->has('last_name_edit'))
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
                        {{ $errors->first('last_name_edit') }}
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
            @if ($errors->has('phone_edit'))
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
                        {{ $errors->first('phone_edit') }}
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
            @if ($errors->has('image_edit'))
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
                        {{ $errors->first('image_edit') }}
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
            @if ($errors->has('address_edit'))
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
                        {{ $errors->first('address_edit') }}
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
            @if ($errors->has('email_edit'))
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
                        {{ $errors->first('email_edit') }}
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
            @if ($errors->has('role_edit'))
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
                        {{ $errors->first('role_edit') }}
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
                        <th scope="col" class="w-1 px-4 py-4">
                            No
                        </th>
                        <th scope="col" class="w-1 px-1 py-3">
                            Name
                        </th>
                        <th scope="col" class="w-1 px-1 py-3">
                            Email
                        </th>
                        <th scope="col" class="w-1 px-1 py-3">
                            Address
                        </th>
                        <th scope="col" class="w-1 px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="w-1 px-6 py-3">
                            Roles
                        </th>
                        <th scope="col" class="w-1 px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="w-28 px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-1 px-6 py-1">
                                {{ $no++ }}
                            </td>
                            <td class="w-1 px-6 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="w-1 px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="w-1 px-6 py-4">
                                {{ $user->address }}
                            </td>
                            <td class="w-1 px-6 py-4">
                                {{ $user->phone }}
                            </td>
                            <td class="w-1 px-6 py-4">
                                {{ $user->roles->role }}
                            </td>
                            <td class="w-1 px-6 py-4">
                                <img src="/img/{{ $user->image }}" alt="">
                            </td>
                            <td class="px-6 py-4 text-right grid grid-cols-2">
                                <a href="javascript:;" type="button"
                                    data-modal-target="update-users-modal{{ $user->id }}"
                                    data-modal-toggle="update-users-modal{{ $user->id }}"
                                    class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-100 text-white w-24 font-bold py-2 px-4 rounded mt-5 ml-5">
                                    <img src="{{ URL('img/edit.png') }}" class="w-5" alt="">
                                    Update
                                </a>
                                <div id="update-users-modal{{ $user->id }}" tabindex="-1"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-4xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                    Update Data Users
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="update-users-modal{{ $user->id }}">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="px-10 py-1 space-y-1 text-left">
                                                <form class="space-y-6 mb-10" enctype="multipart/form-data"
                                                    method="POST" action="{{ route('update-users', $user->id) }}">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" value="{{ $user->id }}" id="user_id_edit"
                                                        name="user_id">
                                                    @php
                                                        $name = explode(' ', $user->name);
                                                        $first_name = array_shift($name);
                                                        $last_name = array_pop($name);
                                                        $name_middle = trim(implode(' ', $name));
                                                    @endphp
                                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                        <div>
                                                            <label for="name"
                                                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('first_name_edit') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                                First Name</label>
                                                            <div
                                                                class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                                @if (!$errors->has('first_name_edit'))
                                                                    <img src="{{ URL('img/user_black.png') }}"
                                                                        alt=""
                                                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                                @endif
                                                                @if ($errors->has('first_name_edit'))
                                                                    <img src="{{ URL('img/user_red.png') }}"
                                                                        alt=""
                                                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                                @endif
                                                                <input type="text" name="first_name_edit"
                                                                    value="{{ $first_name }}"
                                                                    placeholder="Input First Name" autocomplete="off"
                                                                    aria-label="Input Table"
                                                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('first_name_edit') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                                            </div>
                                                            @error('first_name_edit')
                                                                <p class="text-sm text-red-600 text-left dark:text-red-500">
                                                                    <span class="font-medium">{{ $message }}</span>
                                                                </p>
                                                            @enderror
                                                        </div>
                                                        <div>
                                                            <label for="name"
                                                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('last_name_edit') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                                Last Name</label>
                                                            <div
                                                                class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                                @if (!$errors->has('last_name_edit'))
                                                                    <img src="{{ URL('img/user_black.png') }}"
                                                                        alt=""
                                                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                                @endif
                                                                @if ($errors->has('last_name_edit'))
                                                                    <img src="{{ URL('img/user_red.png') }}"
                                                                        alt=""
                                                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                                @endif
                                                                <input type="text" name="last_name_edit"
                                                                    value="{{ $name_middle . ' ' . $last_name }}"
                                                                    placeholder="Input Last Name" autocomplete="off"
                                                                    aria-label="Input Table"
                                                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('last_name_edit') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                                            </div>
                                                            @error('last_name_edit')
                                                                <p class="text-sm text-red-600 text-left dark:text-red-500">
                                                                    <span class="font-medium">{{ $message }}</span>
                                                                </p>
                                                            @enderror
                                                        </div>
                                                        <div>
                                                            <label for="email"
                                                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('image_edit') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                                Photos</label>
                                                            <input
                                                                class="block w-full mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400{{ $errors->has('image_edit') ? 'block w-full text-sm text-red-900 border border-red-300 rounded-lg cursor-pointer bg-red-50 dark:text-red-400 focus:outline-none dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400' : '' }}"
                                                                aria-describedby="file_input_help" name="image_edit"
                                                                id="file_input" type="file">
                                                            @if (!$errors->has('image_edit'))
                                                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                                                                    id="file_input_help">PNG,
                                                                    JPG or JPEG (MIN.
                                                                    512x512px).</p>
                                                            @endif
                                                            @if ($errors->has('image_edit'))
                                                                @error('image_edit')
                                                                    <p
                                                                        class="text-sm text-red-600 text-left dark:text-red-500">
                                                                        <span class="font-medium">{{ $message }}</span>
                                                                    </p>
                                                                @enderror
                                                            @endif
                                                        </div>
                                                        <div>
                                                            <label for="phone"
                                                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('phone_edit') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                                Phone Number</label>
                                                            <div
                                                                class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                                @if (!$errors->has('phone_edit'))
                                                                    <img src="{{ URL('img/phone.png') }}" alt=""
                                                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                                @endif
                                                                @if ($errors->has('phone_edit'))
                                                                    <img src="{{ URL('img/phone_red.png') }}"
                                                                        alt=""
                                                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                                @endif
                                                                <input type="text" name="phone_edit"
                                                                    placeholder="Input Phone Number"
                                                                    value="{{ $user->phone }}"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                    autocomplete="off" aria-label="Input Table"
                                                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('phone_edit') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                                            </div>
                                                        </div>
                                                        @error('phone_edit')
                                                            <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                                                    class="font-medium">{{ $message }}</span>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <label for="phone"
                                                            class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('address_edit') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                            Address</label>
                                                        <div
                                                            class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                            <textarea id="address" rows="4" name="address_edit"
                                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500{{ $errors->has('address_edit') ? 'block p-2.5 w-full text-sm text-red-900 bg-red-50 rounded-lg border border-red-300 focus:ring-red-500 focus:border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red dark:focus:ring-red-500 dark:focus:border-red-500' : '' }}"
                                                                placeholder="Write your address here...">{{ $user->address }}</textarea>
                                                        </div>
                                                        @error('address_edit')
                                                            <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                                                    class="font-medium">{{ $message }}</span>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <label for="email"
                                                            class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('email') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                            Email</label>
                                                        <div
                                                            class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                                            @if (!$errors->has('email'))
                                                                <img src="{{ URL('img/gmail-logo.png') }}" alt=""
                                                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            @endif
                                                            @if ($errors->has('email'))
                                                                <img src="{{ URL('img/gmail-logo-red.png') }}"
                                                                    alt=""
                                                                    class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                                            @endif
                                                            <input type="text" name="email"
                                                                value="{{ $user->email }}" placeholder="Input Email"
                                                                autocomplete="off" aria-label="Input Table"
                                                                class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('email') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                                        </div>
                                                        @error('email')
                                                            <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                                                    class="font-medium">{{ $message }}</span>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <label for="roles"
                                                            class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('role_edit') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                                            Roles</label>
                                                        <div class="flex mt-1">
                                                            <div class="flex-shrink-0 z-10 inline-flex items-center py-1 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600{{ $errors->has('role_edit') ? 'flex-shrink-0 z-10 inline-flex items-center py-1 px-4 text-sm font-medium text-center text-red-500 bg-red-100 border border-red-300 rounded-l-lg hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 dark:bg-red-700 dark:hover:bg-red-600 dark:focus:ring-red-700 dark:text-red-700 dark:border-red-600' : '' }}"
                                                                type="button">
                                                                @if (!$errors->has('role'))
                                                                    <img src="{{ URL('img/setting_black.png') }}"
                                                                        class="h-4 mr-2">
                                                                    </img>
                                                                @endif
                                                                @if ($errors->has('role'))
                                                                    <img src="{{ URL('img/setting_red.png') }}"
                                                                        class="h-4 mr-2">
                                                                    </img>
                                                                @endif
                                                                </img>
                                                                Roles
                                                            </div>
                                                            <select id="role1" name="role_edit" style='width: 100%;'
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                <option selected disabled>Choose a Roles</option>
                                                                @foreach ($roles as $role)
                                                                    <option value="{{ $role->id }}"
                                                                        @if ($user->role_id == $role->id) selected @endif>
                                                                        {{ $role->role }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        @error('role')
                                                            <p class="text-sm text-red-600 dark:text-red-500"><span
                                                                    class="font-medium">{{ $message }}</span></p>
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
                                <a href="javascript:void(0)" id="delete-user"
                                    data-id_user="{{ $user->id }}"
                                    class="btn-delete-user flex items-center justify-center bg-red-600 hover:bg-red-400 text-white w-20 font-bold py-2 px-4 rounded mt-5 ml-5">
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
    <div id="create-users-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Input Data Users
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="create-users-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="px-10 py-1 space-y-1">

                    <form class="space-y-6 mb-10" enctype="multipart/form-data" method="POST" id="UsersModalForm"
                        role="form" action="{{ route('store-users') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('first_name') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                    First Name</label>
                                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                    @if (!$errors->has('first_name'))
                                        <img src="{{ URL('img/user_black.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    @if ($errors->has('first_name'))
                                        <img src="{{ URL('img/user_red.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    <input type="text" id="first_name" name="first_name"
                                        value="{{ old('first_name') }}" placeholder="Input First Name"
                                        autocomplete="off" aria-label="Input Table"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('first_name') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                </div>
                                @error('first_name')
                                    <p class="text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $message }}</span></p>
                                @enderror
                            </div>
                            <div>
                                <label for="name"
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('last_name') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                    Last Name</label>
                                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                    @if (!$errors->has('last_name'))
                                        <img src="{{ URL('img/user_black.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    @if ($errors->has('last_name'))
                                        <img src="{{ URL('img/user_red.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    <input type="text" name="last_name" placeholder="Input Last Name"
                                        value="{{ old('last_name') }}" autocomplete="off" aria-label="Input Table"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('last_name') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                </div>
                                @error('last_name')
                                    <p class="text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $message }}</span></p>
                                @enderror
                            </div>
                            <div>
                                <label
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('image') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}"
                                    for="file_input">Upload
                                    file</label>
                                <input
                                    class="block w-full mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400{{ $errors->has('image') ? 'block w-full text-sm text-red-900 border border-red-300 rounded-lg cursor-pointer bg-red-50 dark:text-red-400 focus:outline-none dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400' : '' }}"
                                    aria-describedby="file_input_help" name="image" id="file_input" type="file">
                                @if (!$errors->has('image'))
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG,
                                        JPG or JPEG (MIN.
                                        512x512px).</p>
                                @endif
                                @if ($errors->has('image'))
                                    @error('image')
                                        <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                                class="font-medium">{{ $message }}</span>
                                        </p>
                                    @enderror
                                @endif
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('phone') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                    Phone Number</label>
                                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                    @if (!$errors->has('phone'))
                                        <img src="{{ URL('img/phone.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    @if ($errors->has('phone'))
                                        <img src="{{ URL('img/phone_red.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    <input type="text" name="phone" placeholder="Input Phone Number"
                                        value="{{ old('phone') }}"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        autocomplete="off" aria-label="Input Table"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('phone') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                </div>
                                @error('phone')
                                    <p class="text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">{{ $message }}</span></p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="address"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('address') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Address</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <textarea id="address" rows="4" name="address"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 placeholder-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500{{ $errors->has('address') ? 'block p-2.5 w-full text-sm text-red-900 bg-red-50 rounded-lg border border-red-300 focus:ring-red-500 focus:border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red dark:focus:ring-red-500 dark:focus:border-red-500 placeholder-red-500' : '' }}"
                                    placeholder="Write your address here...">{{ old('address') }}</textarea>
                            </div>
                            @error('address')
                                <p class="text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div>
                            <label for="email_store"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('email_store') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Email</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if (!$errors->has('email_store'))
                                    <img src="{{ URL('img/gmail-logo.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                @if ($errors->has('email_store'))
                                    <img src="{{ URL('img/gmail-logo-red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                <input type="text" name="email_store" placeholder="Input Email" autocomplete="off"
                                    aria-label="Input Table" value="{{ old('email_store') }}"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('email_store') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                            </div>
                            @error('email_store')
                                <p class="text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('password') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Password</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if (!$errors->has('password'))
                                    <img src="{{ URL('img/lock.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="password" name="password" type="password" placeholder="Input Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button id="toggle-password" type="button"
                                            class="mt-2 focus:outline-none border-none">
                                            <img src="{{ URL('img/hide.png') }}" class="h-6 w-6" id="imgClickAndChange"
                                                onclick="changeImage()">
                                            </img>
                                        </button>
                                    </div>
                                @endif
                                @if ($errors->has('password'))
                                    <img src="{{ URL('img/lock_red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="passwordRed" name="password" type="password"
                                        placeholder="Input Old Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button id="toggle-password-red" type="button"
                                            class="mt-2 focus:outline-none border-none">
                                            <img src="{{ URL('img/hide_red.png') }}" class="h-6 w-6"
                                                id="imgClickAndChangeRed" onclick="changeImageRed()">
                                            </img>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            @error('password')
                                <p class="text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('role') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Roles</label>
                            <div class="flex mt-1">
                                <div id="states-button" data-dropdown-toggle="dropdown-states"
                                    class="flex-shrink-0 z-10 inline-flex items-center py-1 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600{{ $errors->has('role') ? 'flex-shrink-0 z-10 inline-flex items-center py-1 px-4 text-sm font-medium text-center text-red-500 bg-red-100 border border-red-300 rounded-l-lg hover:bg-red-200 focus:ring-4 focus:outline-none focus:ring-red-100 dark:bg-red-700 dark:hover:bg-red-600 dark:focus:ring-red-700 dark:text-red-700 dark:border-red-600' : '' }}"
                                    type="button">
                                    @if (!$errors->has('role'))
                                        <img src="{{ URL('img/setting_black.png') }}" class="h-4 mr-2">
                                        </img>
                                    @endif
                                    @if ($errors->has('role'))
                                        <img src="{{ URL('img/setting_red.png') }}" class="h-4 mr-2">
                                        </img>
                                    @endif
                                    Roles
                                </div>
                                <select id="role" name="role" style='width: 100%;'>
                                    <option selected disabled>Choose a Roles</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" @selected(old('role') == $role->id)>
                                            {{ $role->role }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <p class="text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span></p>
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
    <script>
        $(document).ready(function() {
            $("#role").select2();
        });

        let image_tracker = 'view';

        function changeImage() {
            let image = document.getElementById('imgClickAndChange');
            if (image_tracker == 'view') {
                image.src = '/img/view.png';
                image_tracker = 'hide';
            } else {
                image.src = '/img/hide.png';
                image_tracker = 'view';
            }
        }
        const togglePassword = document.querySelector('#toggle-password');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.querySelector('svg').classList.toggle('text-gray-600');
        });
    </script>
    <script>
        function changeImageRed() {
            let image = document.getElementById('imgClickAndChangeRed');
            if (image_tracker == 'view') {
                image.src = '/img/show_red.png';
                image_tracker = 'hide';
            } else {
                image.src = '/img/hide_red.png';
                image_tracker = 'view';
            }
        }
        const passwordRed = document.querySelector('#passwordRed');
        const togglePasswordRed = document.querySelector('#toggle-password-red');
        togglePasswordRed.addEventListener('click', function(e) {
            const type = passwordRed.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordRed.setAttribute('type', type);
        });
    </script>
    @if ($message = Session('success-store-users'))
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
    @if ($message = Session('success-update-users'))
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
        $("body").on('click', '.btn-delete-user', function() {
            const id = $(this).data("id_user");
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
                    fetch(`/pages/admin-layout/users/${id}`).then(() => {
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
