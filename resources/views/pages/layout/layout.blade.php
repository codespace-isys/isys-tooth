<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ URL('img/gigi.png') }}">
    <title>Diagnosis Penyakit Gigi & Mulut</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <script src="./js/app.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine Js -->
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/0p9kp1nlo0k6j1ymhnzdjs7uxaoj06su7apue9d2f3zysnzu/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <style>
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
            // function nav() {
            //     return {
            //         navOpen: false,
            //         active: "home",
            //         searchBar: false,
            //     };
            // }

            // function dropdown() {
            //     return {
            //         open: false,
            //     };
            // }
            //Creating component Dropdown
            // Alpine.data("dropdown", () => ({
            //     open: false,
            //     toggle(tab) {
            //         this.open = !this.open;
            //         Alpine.store("sidebar").active = tab;
            //     },
            //     activeClass: "bg-gray-800 text-gray-200",
            //     expandedClass: "border-l border-gray-400 ml-4 pl-4",
            //     shrinkedClass: "sm:absolute top-0 left-20 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 border-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28",
            // }));
            // // Creating component Sub Dropdown
            // Alpine.data("sub_dropdown", () => ({
            //     sub_open: false,
            //     sub_toggle() {
            //         this.sub_open = !this.sub_open;
            //     },
            //     sub_expandedClass: "border-l border-gray-400 ml-4 pl-4",
            //     sub_shrinkedClass: "sm:absolute top-0 left-28 sm:shadow-md sm:z-10 sm:bg-gray-900 sm:rounded-md sm:p-4 border-l sm:border-none border-gray-400 ml-4 pl-4 sm:ml-0 w-28",
            // }));
        });
    </script>
</head>


<body x-data class="h-screen mx-auto flex fixed antialiased justify-between">


    <header class="w-full flex fixed justify-end items-center px-6 py-4 bg-gray-800 shadow-m">
        <div class="flex items-center">
            <div class="rounded-full overflow-hidden">
                <img class="w-10 h-10" src="https://via.placeholder.com/150" alt="Avatar">
            </div>
            <h1 class="ml-2 text-white font-bold">{{ auth()->user()->name }}</h1>
        </div>
    </header>
    <!-- Mobile Menu Toggle -->
    <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
        class="sm:hidden absolute top-5 right-5 focus:outline-none">
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
                    <img src="{{ URL('img/user.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    </img>
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Users</h1>
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
                    <img src="{{ URL('img/homewhite.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Dashboard</h1>
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
                    <img src="{{ URL('img/diagnosis.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    </img>
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Indication</h1>
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
                    <img src="{{ URL('img/disease.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    </img>
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Sickness</h1>
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
                    <img src="{{ URL('img/rules.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    </img>
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Regulation</h1>
                </a>
                <a href="{{ route('medicine-doctor') }}" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
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
                    <img src="{{ URL('img/medicine.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    </img>
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Medicine</h1>
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
                    <img src="{{ URL('img/homewhite.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Dashboard</h1>
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
                    <img src="{{ URL('img/homewhite.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
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
                    <img src="{{ URL('img/homewhite.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                    </img>
                    <h1 x-cloak
                        x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ?
                            'sm:hidden' : ''">
                        Result</h1>
                </a>
            @endif
            <a href="/logout" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
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
                <img src="{{ URL('img/logout.png') }}" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                </img>
                <h1 x-cloak
                    x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">
                    Lagout</h1>
            </a>
        </div>
    </div>
    @if (Auth::check())
        @yield('content')
    @endif
    {{-- <footer class="bg-gray-800 py-4">
        <div class="container mx-auto text-white flex justify-between">
            <p>Copyright © 2023</p>
            <p>Terms of Service | Privacy Policy</p>
        </div>
    </footer> --}}

</body>

</html>
