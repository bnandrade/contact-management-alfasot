@extends('main')

@section('title', 'Show Contact')

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
                                <p class=" text-gray-900">Contact details</p>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 py-4">
                        <div class="flex ">
                            <a href="{{ route('index') }}" class="text-gray-700 hover:underline">Return to Home</a>
                        </div>
                    </div>

                    <div class="mt-2 px-6 py-4 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex flex-col">

                            <div class="py-4 px-8 bg-gray-50 shadow-lg rounded-lg">
                                <div>
                                    <p class="mt-2 text-gray-600">ID: {{ $contact->id }}</p>
                                    <h2 class="text-gray-800 text-lg font-semibold">Name: {{ $contact->name }}</h2>
                                    <p class="mt-2 text-gray-600">Contact number: {{ $contact->contact }}</p>
                                    <p class="mt-2 text-gray-600">Email: {{ $contact->email }}</p>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <a href="{{ route('show',$contact->id) }}" class="text-blue-600 hover:underline mr-6">Edit</a>

                                    <button class="text-white text-xs bg-red-700 p-1 rounded hover:bg-red-500">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
