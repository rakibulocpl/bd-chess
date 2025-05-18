<div>
    <x-auth-header :title="__('Create School')" :description="__('Enter your School Information')" />
    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <div>

        <div class="w-150 mt-6">
            <form wire:submit="submit" class="space-y-6">
                <flux:input wire:model="name" label="Name" placeholder="Name" />
                <flux:input wire:model="eiin" label="EIIN No" placeholder="EIIN No" />
                <div>
                    <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                        {{ __('District') }} <span class="text-red-600">*</span>
                    </label>
                    <flux:select wire:model.live="district"  :label="__('')" class="selet2">

                        @foreach ($districtsList as $item)
                            <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>

                <div>
                    <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                        {{ __('Thana/Upazila') }} <span class="text-red-600">*</span>
                    </label>
                    <flux:select wire:model.live="thana" :label="''" >

                        @foreach ($thanasList as $item)
                            <flux:select.option value="{{ $item->id }}">{{ $item->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>
                <flux:button type="submit" variant="primary">Submit</flux:button>
            </form>
        </div>

    </div>

</div>
