@extends('pages.layout.layout')
@section('content')
    <div class="w-full container ml-10 mr-10 mb-10 mt-20 flex">
        <div class="bg-white rounded-lg shadow-lg p-6">
            @if (Session::has('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">{{ Session::get('message') }}</strong>
                    {{-- <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 6.066 4.652a1 1 0 00-1.414 1.414L8.586 10l-3.934 3.934a1 1 0 001.414 1.414L10 11.414l3.934 3.934a1 1 0 001.414-1.414L11.414 10l3.934-3.934a1 1 0 000-1.414z" />
                    </svg>
                </span> --}}
                </div>
            @endif
            <h1 class="w-full text-xl font-bold mb-4">Article Admin</h1>
            <a href="{{ route('create-articles-admin') }}"
                class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white w-40 font-bold py-2 px-4 rounded">
                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 100-12 6 6 0 000 12zm-2-6a2 2 0 114 0 2 2 0 01-4 0z"
                        clip-rule="evenodd" />
                </svg>
                Create Data
            </a>
            <div class="w-full flex flex-wrap justify-between">
                <div class="w-full overflow-x-auto rounded-lg shadow mt-5">
                    <table class="w-full">
                        <thead class="bg-gray50 border-b-2 border-gray-200">
                            <tr>
                                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                                <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Role</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="bg-white">
                                <td class="w-24 p-3 text-sm text-gray-700 whitespace-nowrap">John Doe</td>
                                <td class="w-24 p-3 text-sm text-gray-700 whitespace-nowrap">johndoe@example.com</td>
                                <td class="2-24 p-3 text-sm text-gray-700 whitespace-nowrap"><span
                                        class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50 ">asd</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse
                lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam.
                Maecenas ligulas</p>
            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:hidden">
                <div class="bg-white space-y-3 p-4 rounded-lg shadow">
                    <div class="flex items-center space-x-2 text-sm">
                        <div class="font-bold">
                            ID
                        </div>
                        <div class="text-gray-500">date</div>
                        <div><span
                                class="p-1.5 text-xs font-medium uppercase tracking-wider text-yellow-800 bg-yellow-200 rounded-lg bg-opacity-50 ">asd</span>
                        </div>
                    </div>
                    <div class="text-sm text-gray-700">orem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    <div class="text-sm font-medium text-black">orem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
