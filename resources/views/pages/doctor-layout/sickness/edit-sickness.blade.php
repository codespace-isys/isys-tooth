@extends('pages.layout.layout')
@section('content')
    <div class="w-full container md:mx:auto mt-20 overflow-x-auto">
        <div class="bg-white rounded-lg shadow-lg p-5 ">
            <h1 class="w-full text-xl font-bold mb-4">Edit Sickness Doctor</h1>
            <a href="{{ url()->previous() }}"
                class="rotate-180 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <form action="{{ route('update-sickness', ['id' => $Sickness->id]) }}" method="POST"
                enctype="multipart/form-data" class="w-full max-w-screen-2xl mt-10">
                @csrf
                <label for="large-input" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5">Sickness
                    Name</label>
                <div class="relative flex items-center text-gray-400 focus-within:text-gray-600">
                    <img src="{{ URL('img/virus.png') }}" alt="" class="w-5 h-5 absolute ml-3 pointer-events-none">
                    <input type="text" name="sickness_name" placeholder="Input Sickness" autocomplete="off"
                        aria-label="Input Table" value="{{ $Sickness->sickness_name }}"
                        class="block w-full  pr-3 pl-10 py-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2">
                </div>

                <label for="large-input" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5">Sickness
                    Description</label>
                <textarea name="sickness_description" id="myTextarea" cols="30" rows="10">{{ $Sickness->sickness_description }}</textarea>
                <label for="large-input" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5">Sickness
                    Solution</label>
                <textarea name="sickness_solution" id="myTextarea" cols="30" rows="10">{{ $Sickness->sickness_solution }}</textarea>

                <label for="large-input" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5">Medicine Name</label>
                <select id="selUser" name="medicine_id" style='width: 100%;'>
                    <option selected value="{{ $Sickness->medicine_id }}">{{ $Sickness->medicine->medicine_name }}</option>
                    <option disabled>Choose a Medicine</option>
                    @foreach ($medicine as $medicines)
                        @if (!$medicines->id == $Sickness->medicine_id)
                            <option value="{{ $medicines->id }}">{{ $medicines->medicine_name }}</option>
                        @endif
                    @endforeach
                </select>
                <label for="large-input" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white mt-5">Sickness
                    Image</label>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                    file</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" name="sickness_image" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                    800x400px).</p>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-10">
                    <img src="{{ URL('img/save-data.png') }}" fill="currentColor" class="w-4 h-4 mr-2 rounded"></img>
                    <span>Store Data</span>
                </button>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $("#selUser").select2();
        });
    </script>
@endsection