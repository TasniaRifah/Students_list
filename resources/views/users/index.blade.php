<x-app-layout :users>
  
    <x-slot name="header">
        {{-- @guest
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">


                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>


                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                </div>
            @endif
        @endguest --}}

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students List') }}
        </h2>

    </x-slot>





    <div class="container">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Student Name
                        </th>
                        @auth
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                        @endauth

                        <th scope="col" class="px-6 py-3">
                            Roll
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Registration
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Department
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Current Semester /Year
                        </th>
                        @auth
                            <th scope="col" class="px-6 py-3">
                                Mobile number
                            </th>
                      
                            <th scope="col" class="px-6 py-3">
                                Present Address
                            </th>
                     
                            <th scope="col" class="px-6 py-3">
                                Permanent Address
                            </th>
                        @endauth


                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

                        @foreach ($users as $user)
                    <tr>
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        @auth
                            <td class="px-6 py-4">{{ $user->email }}</td>
                        @endauth
                        <td class="px-6 py-4">{{ $user->roll }}</td>
                        <td class="px-6 py-4">{{ $user->reg }}</td>
                        <td class="px-6 py-4">{{ $user->department }}</td>
                        <td class="px-6 py-4">{{ $user->year }}</td>
                        @auth
                            <td class="px-6 py-4">{{ $user->mobile_number }}</td>
                            <td class="px-6 py-4">{{ $user->present_address }}</td>
                            <td class="px-6 py-4">{{ $user->permanent_address }}</td>
                        @endauth

                    </tr>
                    @endforeach

                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</x-app-layout>
