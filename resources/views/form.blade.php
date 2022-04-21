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
                                <p class=" text-gray-900">Form Contact</p>
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
                            @if ($errors->any())
                                <div class="bg-red-700 text-white p-4 mb-6 text-sm">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ isset($contact) ? route('update',$contact->id) : route('store') }}">
                                {{ csrf_field() }}
                                @if (isset($contact))
                                    {{ method_field('PUT') }}
                                    <div class="mb-6">
                                        <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Contact name</label>
                                        <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Bruno Andrade" required="">
                                    </div>
                                    <div class="mb-6">
                                        <label for="contact" class="text-sm font-medium text-gray-900 block mb-2">Contact number</label>
                                        <input type="text" id="contact" name="contact" value="{{ old('contact', $contact->contact) }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123456789" required="">
                                    </div>
                                    <div class="mb-6">
                                        <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@email.com" required="">
                                    </div>
                                @else

                                    <div class="mb-6">
                                        <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Contact name</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Bruno Andrade" required="">
                                    </div>
                                    <div class="mb-6">
                                        <label for="contact" class="text-sm font-medium text-gray-900 block mb-2">Contact number</label>
                                        <input type="text" id="contact" name="contact" value="{{ old('contact') }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123456789" required="">
                                    </div>
                                    <div class="mb-6">
                                        <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@email.com" required="">
                                    </div>
                                @endif


                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>

                            </form>
                        </div>


                    </div>
                </div>

            </div>
        </div>
@endsection
