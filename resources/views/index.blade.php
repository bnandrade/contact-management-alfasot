@extends('main')

@section('title', 'Contact Management Web application - by Bruno Andrade')

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
                            <div class="mx-auto text-lg leading-7 font-semibold"><p class=" text-gray-900 ">Contact Management Web application - <span class="italic">by Bruno Andrade</span></p></div>
                        </div>
                    </div>

                    <div class="px-6 py-4">
                        <div class="flex flex-row-reverse">
                            <a href="{{ route('create') }}" class="text-white bg-green-700 p-2 rounded hover:bg-green-500">Add Contact</a>
                        </div>
                    </div>

                    <div class="mt-2 px-6 py-4 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden ">
                                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                                            <thead class="bg-gray-100">
                                            <tr>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                                    #
                                                </th>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                                    Contact Name
                                                </th>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                                    Contact number
                                                </th>
                                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase">
                                                    Email
                                                </th>
                                                <th scope="col" colspan="2" class="py-3 px-6 text-xs font-medium tracking-wider text-center text-gray-700 uppercase">
                                                    Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 ">
                                            @foreach ($contacts as $contact)
                                                <tr class="hover:bg-gray-100 ">
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{ $contact->id }}</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">{{ $contact->name }}</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{ $contact->contact }}</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{ $contact->email }}</td>
                                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                                                    </td>
                                                    <td class="py-4 px-6 text-xs font-medium text-right whitespace-nowrap">
                                                        <button class="text-white bg-red-700 p-1 rounded hover:bg-red-500">Delete</button>
                                                    </td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col my-4">
                            <div class="mx-auto text-center items-center sm:rounded-lg">
                                {{ $contacts->onEachSide(5)->links()  }}
                            </div>
                        </div>

                </div>
            </div>

        </div>
    </div>
@endsection
