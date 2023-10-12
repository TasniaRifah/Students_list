<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        {{-- copy --}}
        <div>
            <x-input-label for="roll" :value="__('Roll NO.')" />
            <x-text-input id="roll" class="block mt-1 w-full" type="number" name="roll" :value="old('roll')"
                required autofocus autocomplete="roll" />
            <x-input-error :messages="$errors->get('roll')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="reg" :value="__('Rgistration No.')" />
            <x-text-input id="reg" class="block mt-1 w-full" type="number" name="reg" :value="old('reg')"
                required autofocus autocomplete="reg" />
            <x-input-error :messages="$errors->get('reg')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')"
                required autofocus autocomplete="department" />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="year" :value="__('Current Semester /Year')" />
            <x-text-input id="year" class="block mt-1 w-full" type="date" name="year" :value="old('year')"
                required autofocus autocomplete="year" />
            <x-input-error :messages="$errors->get('year')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="mobile_number" :value="__('Mobile Number')" />
            <x-text-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number"
                :value="old('mobile_number')" required autofocus autocomplete="mobile_number" />
            <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="present_address" :value="__('Present Address')" />
            <x-text-input id="present_address" class="block mt-1 w-full" type="text" name="present_address"
                :value="old('present_address')" required autofocus autocomplete="present_address" />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="permanent_address" :value="__('Permanent Address')" />
            <x-text-input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address"
                :value="old('permanent_address')" required autofocus autocomplete="permanent_address" />
            <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
        </div>



        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
