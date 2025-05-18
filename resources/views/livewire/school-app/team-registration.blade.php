
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create a Team')" :description="__('Enter your team details below to create your team')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <p class="text-center text-indigo-400">*** Multiple teams from the same school can register. ***</p>

    @session('success')
    <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
        <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
        </svg>
        <span class="font-medium"> {{ $value }} </span>
    </div>
    @endsession

    <form wire:submit="submit" class="flex flex-col gap-6">
        <p class="text-red-500"> All red star-marked fields must be filled.</p>
        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('District') }} <span class="text-red-600">*</span>
            </label>
            <flux:select wire:model.live="district"  :label="__('')" class="select-district">

                @foreach ($districtsList as $item)
                    <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                @endforeach
            </flux:select>
        </div>
        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Thana/Upazila') }} <span class="text-red-600">*</span>
            </label>
            <flux:select wire:model.live="thana" :label="''" class="select-thana">

                @foreach ($thanasList as $item)
                    <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                @endforeach
            </flux:select>
        </div>
        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('School Name') }} <span class="text-red-600">*</span>
            </label>
            <flux:select wire:model.live="school_id" :label="''" class="select-school">
                @foreach ($schoolList as $item)
                    <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                @endforeach
            </flux:select>
        </div>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Captain\'s Name ') }}
            </label>
            <flux:input
                wire:model="captain_name "
                type="text"
                :placeholder="__('Captain\'s Name ')"
                :label="''" {{-- remove flux label --}}
            />
        </div>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Mentor\'s Name ') }}
            </label>
            <flux:input
                wire:model="mentor_name "
                type="text"
                :placeholder="__('Mentor\'s Name ')"
                :label="''" {{-- remove flux label --}}
            />
        </div>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                {{ __('Players') }} <span class="text-red-600">*</span>
            </label>


            <p class="text-sm text-red-400 font-semibold mb-2 italic">
                Each team must have 4 players of which one player must be below 12 years of age on 1st January 2025. You may also add 1 extra (substitute) player.
            </p>

            <flux:checkbox.group wire:model="players" :label="''" {{-- remove flux label --}}>
                @foreach($playerList as $item)
                    <flux:checkbox label="{{$item->name}}" value="{{$item->id}}"/>
                @endforeach
            </flux:checkbox.group>
        </div>





        <div class="flex items-center justify-start">
            <flux:button type="submit" variant="primary" class="w-32 ">
                {{ __('Submit') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('You need to register as an individual before creating a team.') }}
        <flux:link :href="route('application.applicantRegister')" wire:navigate>{{ __('Register here.') }}</flux:link>
    </div>
</div>

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        document.addEventListener('flux:initialized', function () {
            sele
            initSelect2();

            // After each Flux DOM update
            document.addEventListener('flux:updated', function () {
                updateSelect2();
            });
        });

        function initSelect2() {
            console.log('1111')
            $('.select-district').select2().on('change', function () {
                window.livewire.emit('setDistrict', $(this).val());
            });

            $('.select-thana').select2().on('change', function () {
                window.livewire.emit('setThana', $(this).val());
            });

            $('.select-school').select2().on('change', function () {
                window.livewire.emit('setSchool', $(this).val());
            });
        }

        function updateSelect2() {
            // Sync Select2 values from Livewire Flux state
            // You need to get data from Flux state or set it via Livewire emit event

            // Example:
            // get values from Flux props (or pass via window object or global vars)
            // For demo, just trigger refresh
            $('.select-district').trigger('change.select2');
            $('.select-thana').trigger('change.select2');
            $('.select-school').trigger('change.select2');
        }

    </script>

@endpush
