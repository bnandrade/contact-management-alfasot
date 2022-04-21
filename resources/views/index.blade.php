<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class=" min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
            <img src="https://www.alfasoft.pt/assets/images/logo.png">
        </div>

        <div class="w-full mt-8 bg-white dark:bg-gray-800  shadow sm:rounded-lg">

            <div class="">
                <div class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="mx-auto text-lg leading-7 font-semibold"><p class=" text-gray-900 ">Contact Management Web application - <span class="italic">by Bruno Andrade</span></p></div>
                    </div>
                </div>

                <div class="mt-2 px-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden ">
                                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                        <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                #
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Contact Name
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Contact number
                                            </th>
                                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Email
                                            </th>
                                            <th scope="col" class="p-4">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @foreach ($contacts as $contact)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->id }}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $contact->name }}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->contact }}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->email }}</td>
                                                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                    <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                </td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>


            </div>
        </div>

    </div>
</div>
</body>
</html>
