<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ URL('img/gigi.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Diagnosis Penyakit Gigi & Mulut</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <script src="./js/app.js"></script>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Alpine Js -->
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/0p9kp1nlo0k6j1ymhnzdjs7uxaoj06su7apue9d2f3zysnzu/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #edf2f7;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #667eea !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }

        [x-cloak] {
            display: none;
        }
    </style>
    <script>
        document.addEventListener("alpine:init", () => {
            // Stores variable globally
            Alpine.store("sidebar", {
                full: false,
                active: "home",
                navOpen: false,
            });

            Alpine.data("tooltip", () => ({
                show: false,
                visibleClass: "block sm:absolute -top-7 sm:border border-gray-800 left-5 sm:text-sm sm:bg-gray-900 sm:px-2 sm:py-1 sm:rounded-md",
            }));
            tinymce.init({
                selector: "#myTextarea",
                height: 400,
                plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                toolbar_sticky: true,
                autosave_ask_before_unload: true,
                autosave_interval: '30s',
                autosave_prefix: '{path}{query}-{id}-',
                autosave_restore_when_empty: false,
                autosave_retention: '2m',
                image_advtab: true,
                link_list: [{
                        title: 'My page 1',
                        value: 'https://www.codexworld.com'
                    },
                    {
                        title: 'My page 2',
                        value: 'http://www.codexqa.com'
                    }
                ],
                image_list: [{
                        title: 'My page 1',
                        value: 'https://www.codexworld.com'
                    },
                    {
                        title: 'My page 2',
                        value: 'http://www.codexqa.com'
                    }
                ],
                image_class_list: [{
                        title: 'None',
                        value: ''
                    },
                    {
                        title: 'Some class',
                        value: 'class-name'
                    }
                ],
                importcss_append: true,
                file_picker_callback: (callback, value, meta) => {
                    /* Provide file and text for the link dialog */
                    if (meta.filetype === 'file') {
                        callback('https://www.google.com/logos/google.jpg', {
                            text: 'My text'
                        });
                    }

                    /* Provide image and alt text for the image dialog */
                    if (meta.filetype === 'image') {
                        callback('https://www.google.com/logos/google.jpg', {
                            alt: 'My alt text'
                        });
                    }

                    /* Provide alternative source and posted for the media dialog */
                    if (meta.filetype === 'media') {
                        callback('movie.mp4', {
                            source2: 'alt.ogg',
                            poster: 'https://www.google.com/logos/google.jpg'
                        });
                    }
                },
                templates: [{
                        title: 'New Table',
                        description: 'creates a new table',
                        content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                    },
                    {
                        title: 'Starting my story',
                        description: 'A cure for writers block',
                        content: 'Once upon a time...'
                    },
                    {
                        title: 'New list with dates',
                        description: 'New List with dates',
                        content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                    }
                ],
                template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                height: 400,
                image_caption: true,
                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                noneditable_class: 'mceNonEditable',
                toolbar_mode: 'sliding',
                contextmenu: 'link image table',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        });
    </script>
</head>


<body x-data class="h-full mx-auto flex fixed antialiased justify-between">
    <aside class="flex flex-row min-h-screen overflow-x-hidden bg-slate-300 text-gray-800">
        <header class="w-full flex fixed justify-end items-center px-6 py-4 bg-gray-800 shadow-m">
            <div class="flex items-center">
                <div class="rounded-full overflow-hidden">
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        class="flex items-center text-sm font-medium text-gray-100 rounded-full hover:text-gray-300 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-100 dark:text-white"
                        type="button">
                        <img class="w-8 h-8 mr-2 rounded-full" src="/img/{{ auth()->user()->image }}" alt="user photo">
                        {{ auth()->user()->name }}
                    </button>
                </div>
                <!-- Dropdown menu -->
                <div id="dropdownAvatarName"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium ">{{ auth()->user()->roles->role }}</div>
                        <div class="truncate">{{ auth()->user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="#" data-modal-target="account-setting-modal{{ auth()->user()->id }}"
                                data-modal-toggle="account-setting-modal{{ auth()->user()->id }}"
                                id="btn-account-setting"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Account
                                Setting</a>
                        </li>
                        <li>
                            <a href="#" data-modal-target="change-password-modal"
                                data-modal-toggle="change-password-modal" id="btn-change-password"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Change
                                Password</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <a href="/logout"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Mobile Menu Toggle -->
        <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
            class="sm:hidden absolute top-5 right-5 ml-10 focus:outline-none">
            <!-- Menu Icons -->
            <img src="{{ URL('img/menuwhite.png') }}" class="-left-10 -top-10 mr-60 h-7 w-10"
                x-bind:class="$store.sidebar.navOpen ? 'hidden' : ''" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </img>

            <!-- Close Menu -->
            <div x-cloak class="mr-60 mb-60 mt-60 h-6 w-6" x-bind:class="$store.sidebar.navOpen ? '' : 'hidden'"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
            </div>
        </button>
        <div class="h-screen bg-gray-900 transition-all duration-300 space-y-2 fixed sm:relative"
            x-bind:class="{
                'w-64': $store.sidebar.full,
                'w-64 sm:w-20': !$store.sidebar.full,
                'top-0 left-0': $store.sidebar
                    .navOpen,
                'top-0 -left-64 sm:left-0': !$store.sidebar.navOpen
            }">
            <img src="{{ URL('img/gigi1000.png') }}" class="text-white font-black py-4"
                x-bind:class="$store.sidebar.full ? 'text-2xl px-4' : 'text-xl px-4 xm:px-2'"></img>
            <div class="px-4 space-y-2">
                <!-- SideBar Toggle -->
                <button @click="$store.sidebar.full = !$store.sidebar.full"
                    class="hidden sm:block focus:outline-none absolute p-1 -right-3 top-10 bg-gray-900 rounded-full shadow-md">
                    <img src="{{ URL('img/arrowwhite.png') }}"
                        class="h-4 w-4 transition-all duration-300 text-white transform"
                        x-bind:class="$store.sidebar.full ? 'rotate-90' : '-rotate-90 '" viewBox="0 0 20 20"
                        fill="currentColor">
                    </img>
                </button>
                <!-- Home -->
                @if (auth()->user()->role_id == 1)
                    <a href="{{ route('dashboard-admin') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/homewhite.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Dashboard</h1>
                    </a>
                    <a href="{{ route('users-admin') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/user.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Users</h1>
                    </a>
                    <a href="{{ route('roles-admin') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/setting.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Roles</h1>
                    </a>
                    <a href="{{ route('articles-admin') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/article.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Article</h1>
                    </a>
                    <a x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                        @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/result.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Result</h1>
                    </a>
                @endif
                @if (auth()->user()->role_id == 2)
                    <a href="{{ route('dashboard-doctor') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/homewhite.png') }}" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Dashboard</h1>
                    </a>
                    <a href="{{ route('medicine-doctor') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/medicine.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Medicine</h1>
                    </a>
                    <a href="{{ route('indication-doctor') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/diagnosis.png') }}" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Indication</h1>
                    </a>
                    <a href="{{ route('sickness-doctor') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/disease.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Sickness</h1>
                    </a>
                    <a href="{{ route('regulation-doctor') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/rules.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Regulation</h1>
                    </a>
                @endif
                @if (auth()->user()->role_id == 3)
                    <a href="{{ route('dashboard-users') }}" x-data="tooltip" x-on:mouseover="show = true"
                        x-on:mouseleave="show = false" @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/homewhite.png') }}" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Dashboard</h1>
                    </a>
                    <a href="{{ route('consultation-users') }}" x-data="tooltip"
                        x-on:mouseover="show = true" x-on:mouseleave="show = false"
                        @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/doctor-consultation.png') }}" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Consultation</h1>
                    </a>
                    <a x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                        @click="$store.sidebar.active = 'home' "
                        class=" relative flex items-center hover:bg-gray-800 active:bg-gray-200 hover:text-gray-200 focus:outline-none focus:ring focus:ring-gray-50 space-x-2 rounded-md p-2 cursor-pointer"
                        x-bind:class="{
                            'justify-start': $store.sidebar.full,
                            'sm:justify-center': !$store.sidebar
                                .full,
                            'text-gray-200 bg-gray-800': $store.sidebar.active == 'home',
                            'text-gray-400 ': $store
                                .sidebar.active != 'home'
                        }">
                        <img src="{{ URL('img/result.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                        </img>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                                'sm:hidden' : ''">
                            Result</h1>
                    </a>
                @endif
            </div>
        </div>
        @if (Auth::check())
            <div class="container w-full mt-16 overflow-x-auto rounded shadow">
                @yield('content')
            </div>
        @endif
    </aside>
    @if ($errors->has('old_password') || $errors->has('new_password') || $errors->has('confirm_password'))
        <script>
            function myFunction() {
                document.getElementById("btn-change-password").value = "Clicked";
            }
            setTimeout(function() {
                document.getElementById("btn-change-password").click();
            }, 1000);
        </script>
    @endif
    <!-- Change Password Modal -->
    <div id="change-password-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Change Password
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="change-password-modal">
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
                <form action="{{ route('store-change-password') }}" method="POST">
                    @csrf
                    <div class="p-6 space-y-6">
                        <div>
                            <label for="email"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('old_password') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Old Password</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if (!$errors->has('old_password'))
                                    <img src="{{ URL('img/old-key.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="password" name="old_password" type="password"
                                        placeholder="Input Old Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('old_password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button id="toggle-password" type="button"
                                            class="mt-2 focus:outline-none border-none">
                                            <img src="{{ URL('img/hide.png') }}" class="h-6 w-6"
                                                id="imgClickAndChange" onclick="changeImage()">
                                            </img>
                                        </button>
                                    </div>
                                @endif
                                @if ($errors->has('old_password'))
                                    <img src="{{ URL('img/old-key-red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="passwordRed" name="old_password" type="password"
                                        placeholder="Input Old Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('old_password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
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
                            @error('old_password')
                                <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <script>
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
                            });
                        </script>
                        <script>
                            let image_tracker = 'view';

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
                        <div>
                            <label for="email"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('new_password') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                New Password</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if (!$errors->has('new_password'))
                                    <img src="{{ URL('img/new-password.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="password1" name="new_password" type="password"
                                        placeholder="Input New Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('new_password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button id="toggle-password1" type="button"
                                            class="mt-2 focus:outline-none border-none">
                                            <img src="{{ URL('img/hide.png') }}" class="h-6 w-6"
                                                id="imgClickAndChange1" onclick="changeImage1()">
                                            </img>
                                        </button>
                                    </div>
                                @endif
                                @if ($errors->has('new_password'))
                                    <img src="{{ URL('img/new-password-red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="passwordRed1" name="new_password" type="password"
                                        placeholder="Input New Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('new_password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button id="toggle-password-red1" type="button"
                                            class="mt-2 focus:outline-none border-none">
                                            <img src="{{ URL('img/hide_red.png') }}" class="h-6 w-6"
                                                id="imgClickAndChangeRed1" onclick="changeImageRed1()">
                                            </img>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            @error('new_password')
                                <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <script>
                            let image_tracker1 = 'view';

                            function changeImage1() {
                                let image = document.getElementById('imgClickAndChange1');
                                if (image_tracker1 == 'view') {
                                    image.src = '/img/view.png';
                                    image_tracker1 = 'hide';
                                } else {
                                    image.src = '/img/hide.png';
                                    image_tracker1 = 'view';
                                }
                            }
                            const togglePassword1 = document.querySelector('#toggle-password1');
                            const password1 = document.querySelector('#password1');

                            togglePassword1.addEventListener('click', function(e) {
                                const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
                                password1.setAttribute('type', type);
                            });
                        </script>
                        <script>
                            let image_tracker1 = 'view';

                            function changeImageRed1() {
                                let image = document.getElementById('imgClickAndChangeRed1');
                                if (image_tracker1 == 'view') {
                                    image.src = '/img/show_red.png';
                                    image_tracker1 = 'hide';
                                } else {
                                    image.src = '/img/hide_red.png';
                                    image_tracker1 = 'view';
                                }
                            }
                            const passwordRed1 = document.querySelector('#passwordRed1');
                            const togglePasswordRed1 = document.querySelector('#toggle-password-red1');
                            togglePasswordRed1.addEventListener('click', function(e) {
                                const type = passwordRed1.getAttribute('type') === 'password' ? 'text' : 'password';
                                passwordRed1.setAttribute('type', type);
                            });
                        </script>
                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-400 dark:text-white{{ $errors->has('confirm_password') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Confirm Password</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if ($errors->has('confirm_password'))
                                    <img src="{{ URL('img/confirm_red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="passwordRed2" name="confirm_password" type="password"
                                        placeholder="Input Confirm Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('confirm_password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button id="toggle-password-red2" type="button"
                                            class="mt-2 focus:outline-none border-none">
                                            <img src="{{ URL('img/hide_red.png') }}" class="h-6 w-6"
                                                id="imgClickAndChangeRed2" onclick="changeImageRed2()">
                                            </img>
                                        </button>
                                    </div>
                                @endif
                                @if (!$errors->has('confirm_password'))
                                    <img src="{{ URL('img/confirm.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    <input id="password2" name="confirm_password" type="password"
                                        placeholder="Input Confirm Password"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('confirm_password') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold rounded-2xl border-none ring-2 border border-red-500 text-red-700 placeholder-red-700 text-sm ring-red-500 focus:ring-red-500 focus:ring-2 focus:border-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500' : '' }}">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                        <button id="toggle-password2" type="button"
                                            class="mt-2 focus:outline-none border-none">
                                            <img src="{{ URL('img/hide.png') }}" class="h-6 w-6"
                                                id="imgClickAndChange2" onclick="changeImage2()">
                                            </img>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            @error('confirm_password')
                                <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <script>
                            let image_tracker2 = 'view';

                            function changeImage2() {
                                let image = document.getElementById('imgClickAndChange2');
                                if (image_tracker2 == 'view') {
                                    image.src = '/img/view.png';
                                    image_tracker2 = 'hide';
                                } else {
                                    image.src = '/img/hide.png';
                                    image_tracker2 = 'view';
                                }
                            }
                            const togglePassword2 = document.querySelector('#toggle-password2');
                            const password2 = document.querySelector('#password2');

                            togglePassword2.addEventListener('click', function(e) {
                                const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
                                password2.setAttribute('type', type);
                            });
                        </script>
                        <script>
                            function changeImageRed2() {
                                let image = document.getElementById('imgClickAndChangeRed2');
                                if (image_tracker2 == 'view') {
                                    image.src = '/img/show_red.png';
                                    image_tracker2 = 'hide';
                                } else {
                                    image.src = '/img/hide_red.png';
                                    image_tracker2 = 'view';
                                }
                            }
                            const passwordRed2 = document.querySelector('#passwordRed2');
                            const togglePasswordRed2 = document.querySelector('#toggle-password-red2');
                            togglePasswordRed2.addEventListener('click', function(e) {
                                const type = passwordRed2.getAttribute('type') === 'password' ? 'text' : 'password';
                                passwordRed2.setAttribute('type', type);
                            });
                        </script>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="medium-modal" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Accept</button>
                        <a href="{{ url()->previous() }}" data-modal-hide="medium-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (
        $errors->has('first_name_setting') ||
            $errors->has('last_name_setting') ||
            $errors->has('image_setting') ||
            $errors->has('phone_setting') ||
            $errors->has('address_setting') ||
            $errors->has('email'))
        <script>
            function myFunction() {
                document.getElementById("btn-account-setting").value = "Clicked";
            }
            setTimeout(function() {
                document.getElementById("btn-account-setting").click();
            }, 1000);
        </script>
    @endif
    <!-- Account Setting Modal -->
    <div id="account-setting-modal{{ auth()->user()->id }}" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Account Setting
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="account-setting-modal{{ auth()->user()->id }}">
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
                <div class="px-10 py-1 space-y-1 text-left">
                    <form class="space-y-6 mb-10" enctype="multipart/form-data" method="POST"
                        action="{{ route('store-account-setting', auth()->user()->id) }}">
                        @method('PUT')
                        @csrf
                        @php
                            $name = explode(' ', auth()->user()->name);
                            $first_name = array_shift($name);
                            $last_name = array_pop($name);
                            $name_middle = trim(implode(' ', $name));
                        @endphp
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('first_name_setting') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                    First Name</label>
                                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                    @if (!$errors->has('first_name_setting'))
                                        <img src="{{ URL('img/user_black.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    @if ($errors->has('first_name_setting'))
                                        <img src="{{ URL('img/user_red.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    <input type="text" name="first_name_setting" value="{{ $first_name }}"
                                        placeholder="Input First Name" autocomplete="off" aria-label="Input Table"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('first_name_setting') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                </div>
                                @error('first_name_setting')
                                    <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                            class="font-medium">{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label for="name"
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('last_name_setting') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                    Last Name</label>
                                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                    @if (!$errors->has('last_name_setting'))
                                        <img src="{{ URL('img/user_black.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    @if ($errors->has('last_name_setting'))
                                        <img src="{{ URL('img/user_red.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    <input type="text" name="last_name_setting"
                                        value="{{ $name_middle . ' ' . $last_name }}" placeholder="Input Last Name"
                                        autocomplete="off" aria-label="Input Table"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('last_name_setting') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                </div>
                                @error('last_name_setting')
                                    <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                            class="font-medium">{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>
                            <div>
                                <label
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('image_setting') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}"
                                    for="file_input">Upload
                                    file</label>
                                <input
                                    class="block w-full mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400{{ $errors->has('image_setting') ? 'block w-full text-sm text-red-900 border border-red-300 rounded-lg cursor-pointer bg-red-50 dark:text-red-400 focus:outline-none dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400' : '' }}"
                                    aria-describedby="file_input_help" name="image_setting" id="file_input"
                                    type="file">
                                @if (!$errors->has('image_setting'))
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG,
                                        JPG or JPEG (MIN.
                                        512x512px).</p>
                                @endif
                                @if ($errors->has('image_setting'))
                                    @error('image_setting')
                                        <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                                class="font-medium">{{ $message }}</span>
                                        </p>
                                    @enderror
                                @endif
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('phone_setting') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                    Phone Number</label>
                                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                    @if (!$errors->has('phone_setting'))
                                        <img src="{{ URL('img/phone.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    @if ($errors->has('phone_setting'))
                                        <img src="{{ URL('img/phone_red.png') }}" alt=""
                                            class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                    @endif
                                    <input type="text" name="phone_setting" placeholder="Input Phone Number"
                                        value="{{ auth()->user()->phone }}"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        autocomplete="off" aria-label="Input Table"
                                        class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('phone_setting') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                                </div>
                                @error('phone_setting')
                                    <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                            class="font-medium">{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="phone"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('address_setting') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Address</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                <textarea id="address" rows="4" name="address_setting"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500{{ $errors->has('address_setting') ? 'block p-2.5 w-full text-sm text-red-900 bg-red-50 rounded-lg border border-red-300 focus:ring-red-500 focus:border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-red dark:focus:ring-red-500 dark:focus:border-red-500' : '' }}"
                                    placeholder="Write your address here...">{{ auth()->user()->address }}</textarea>
                            </div>
                            @error('address_setting')
                                <p class="text-sm text-red-600 text-left dark:text-red-500"><span
                                        class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="block text-sm  font-medium text-gray-400 dark:text-white{{ $errors->has('email') ? 'block text-sm font-medium text-red-700 dark:text-red-500' : '' }}">
                                Email</label>
                            <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                                @if (!$errors->has('email'))
                                    <img src="{{ URL('img/gmail-logo.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                @if ($errors->has('email'))
                                    <img src="{{ URL('img/gmail-logo-red.png') }}" alt=""
                                        class="w-5 h-5 mt-2 absolute ml-3 pointer-events-none">
                                @endif
                                <input type="text" name="email" value="{{ auth()->user()->email }}"
                                    placeholder="Input Email" autocomplete="off" aria-label="Input Table"
                                    class="block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2{{ $errors->has('email') ? 'block w-full pr-3 pl-10 py-2 mt-2 font-semibold placeholder-red-500 text-red-900 rounded-2xl border-none ring-2 ring-red-300 focus:ring-red-500 focus:ring-2' : '' }}">
                            </div>
                            @error('email')
                                <p class="text-sm text-red-600 text-left dark:text-red-500"><span
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
</body>

</html>
