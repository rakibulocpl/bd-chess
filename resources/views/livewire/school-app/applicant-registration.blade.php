<div class="flex flex-col gap-6">

    <x-auth-header :title="__('Create an Individual Account')"
                   :description="__('Enter your details below to create your account')"/>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')"/>

    @session('success')
    <div
        class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800"
        role="alert">
        <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
        </svg>
        <span class="font-medium"> {{ $value }} </span>
    </div>
    @endsession

    <form wire:submit="register" class="flex flex-col gap-6">

        <p class="text-red-500"> All red star-marked fields must be filled.</p>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('FIDE ID') }}
            </label>
            <flux:input
                wire:model="fide_id"
                type="text"
                :placeholder="__('FIDE ID')"
                :label="''" {{-- remove flux label --}}
            />
        </div>
        <!-- Name -->
        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Name') }} <span class="text-red-600">*</span>
            </label>
            <flux:input
                wire:model="name"
                type="text"
                autofocus
                :label="''" {{-- remove flux label --}}
                autocomplete="name"
                :placeholder="__('Full name')"
            />
        </div>


        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Gender') }} <span class="text-red-600">*</span>
            </label>
            <flux:select wire:model="gender"         :label="''" {{-- remove flux label --}}>
                <flux:select.option value="">Choose Gender</flux:select.option>
                <flux:select.option value="1">Male</flux:select.option>
                <flux:select.option value="2">Female</flux:select.option>
                <flux:select.option value="3">Other</flux:select.option>
            </flux:select>
        </div>


        <div class="mb-4">
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Date of Birth') }} <span class="text-red-600">*</span>
            </label>

            <div class="relative">
                <input
                    id="dob"
                    type="date"
                    wire:model="dob"
                    class="peer block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
                @error('dob')
                <p class="mt-1 text-sm font-medium text-red-500">{{ $message }}</p>
                @enderror
            </div>

            @error('date')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <flux:input
            wire:model="birth_reg_no"
            :label="__('Birth Registration Number')"
            type="text"
            :placeholder="__('Birth Registration Number')"
        />
        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Mobile Number') }} <span class="text-red-600">*</span>
            </label>
            <flux:input
                wire:model="mobile"
                type="text"
                :placeholder="__('Mobile Number')"
                :label="''" {{-- remove flux label --}}
            />
        </div>




        <div>

            <flux:input
                wire:model="lichess_user"
                :label="__('Lichess User')"
                type="text"
                :placeholder="__('Lichess User Name')"
            />

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Do you have a lichess.org account?') }}
                <a href="https://lichess.org" target="_blank" class="text-blue-600 underline hover:text-blue-800">
                    {{ __('If not, create an account here') }}
                </a>
            </p>
        </div>


        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            autocomplete="email"
            placeholder="email@example.com"
        />

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('District') }} <span class="text-red-600">*</span>
            </label>

            <flux:select wire:model.live="district"         :label="''" {{-- remove flux label --}}>
                @foreach ($districtsList as $item)
                    <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                @endforeach
            </flux:select>
        </div>


        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Thana/Upazila') }} <span class="text-red-600">*</span>
            </label>
            <flux:select wire:model.live="thana"         :label="''" {{-- remove flux label --}}>
                @foreach ($thanasList as $item)
                    <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                @endforeach
            </flux:select>
        </div>
        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('School Name') }} <span class="text-red-600">*</span>
            </label>
            <flux:select wire:model="school_id"         :label="''" {{-- remove flux label --}}>
                @foreach ($schoolList as $item)
                    <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                @endforeach
            </flux:select>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('If your school is missing in this list,  ') }}
                <a href="{{route('schools.create')}}" target="_blank" class="text-blue-600 underline hover:text-blue-800">
                    {{ __(' click here to create it. ') }}
                </a>
            </p>
        </div>


        <flux:textarea
            wire:model="present_address"
            label="Present Address"
            placeholder="Present Address"
        />


        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                {{ __('Profile Photo') }}
            </label>

            <input
                id="image"
                type="file"
                accept="image/*"
                wire:model="profile_image"
                class="block w-full text-gray-700 bg-white border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            >

            @error('image')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <flux:field variant="inline">
            <flux:checkbox wire:model="terms"/>

            <flux:label>I agree to have a FIDE ID</flux:label>

            <flux:error name="terms"/>
        </flux:field>


        <div class="flex items-center justify-start">
            <flux:button type="submit" variant="primary" class="w-32">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Ready to create a team? Go to the ') }}
        <flux:link :href="route('home')" wire:navigate>{{ __('Team Registration page') }}</flux:link>
    </div>
</div>
