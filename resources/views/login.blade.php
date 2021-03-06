@extends('main')

@section('title', 'Create Contact')

@section('content')
    <div class=" min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-4">
            <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                <img src="https://www.alfasoft.pt/assets/images/logo.png">
            </div>

            <div class="w-full mt-8 bg-white  shadow sm:rounded-lg">

                <div class="">
                    <div class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="mx-auto text-lg leading-7 font-semibold">
                                <p class=" text-gray-900">Form Login</p>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 py-4">
                        <div class="flex ">
                            <a href="{{ route('index') }}" class="text-gray-700 hover:underline">Return to Home</a>
                        </div>
                    </div>

                    <div class="mt-2 px-6 py-4 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex flex-col text-center">

                            <a href="{{ route('authenticate') }}" class="text-blue-700 text-4xl hover:underline">Automatic Login</a>

                        </div>


                    </div>
                </div>

            </div>
        </div>
@endsection
