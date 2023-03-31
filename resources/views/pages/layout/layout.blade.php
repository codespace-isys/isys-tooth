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
            // Creating tooltip
        });
    </script>
</head>


<body x-data class="h-screen mx-auto flex fixed antialiased justify-between">


    <header class="w-full flex fixed justify-end items-center px-6 py-4 bg-gray-800 shadow-m">
        <div class="flex items-center">
            <div class="rounded-full overflow-hidden">
                <img class="w-10 h-10" src="https://via.placeholder.com/150" alt="Avatar">
            </div>
            <h1 class="ml-2 text-white font-bold"></h1>
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
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                </div>
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Users</h1>
                </div>
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Article</h1>
                </div>
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Hasil</h1>
                </div>
            @endif
            @if (auth()->user()->role_id == 2)
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Gejala</h1>
                </div>
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Penyakit</h1>
                </div>
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Aturan</h1>
                </div>
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Obat</h1>
                </div>
            @endif
            @if (auth()->user()->role_id == 3)
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Konsultasi</h1>
                </div>
                <div x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                    @click="$store.sidebar.active = 'home' "
                    class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
                        Hasil</h1>
                </div>
            @endif
            <a href="/logout" x-data="tooltip" x-on:mouseover="show = true" x-on:mouseleave="show = false"
                @click="$store.sidebar.active = 'home' "
                class=" relative flex items-center hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
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
