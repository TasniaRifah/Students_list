<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="roll" :value="__('Roll NO.')" />
            <x-text-input id="roll" class="block mt-1 w-full" type="number" name="roll" :value="old('roll', $user->roll)"
                required autofocus autocomplete="roll" />
            <x-input-error :messages="$errors->get('roll')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="reg" :value="__('Rgistration No.')" />
            <x-text-input id="reg" class="block mt-1 w-full" type="number" name="reg" :value="old('reg',$user->reg)"
                required autofocus autocomplete="reg" />
            <x-input-error :messages="$errors->get('reg')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department',$user->department)"
                required autofocus autocomplete="department" />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="year" :value="__('Current Semester /Year')" />
            <x-text-input id="year" class="block mt-1 w-full" type="date" name="year" :value="old('year',$user->year)"
                required autofocus autocomplete="year" />
            <x-input-error :messages="$errors->get('year')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="mobile_number" :value="__('Mobile Number')" />
            <x-text-input id="mobile_number" class="block mt-1 w-full" type="number" name="mobile_number"
                :value="old('mobile_number',$user->mobile_number)" required autofocus autocomplete="mobile_number" />
            <x-input-error :messages="$errors->get('mobile_number')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="present_address" :value="__('Present Address')" />
            <x-text-input id="present_address" class="block mt-1 w-full" type="text" name="present_address"
                :value="old('present_address',$user->present_address)" required autofocus autocomplete="present_address" />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="permanent_address" :value="__('Permanent Address')" />
            <x-text-input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address"
                :value="old('permanent_address',$user->permanent_address)" required autofocus autocomplete="permanent_address" />
            <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
