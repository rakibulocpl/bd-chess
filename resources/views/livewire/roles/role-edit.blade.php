<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for Edit Role') }}</flux:subheading>
        <flux:separator variant="subtle"/>
    </div>

    <div>
        <a href="{{route('users.index')}}"
           class="bg-green-500 hover:bg-green-600 text-white text-xs px-3 py-1 rounded mr-2">Back</a>
        <div class="w-150 mt-6">
            <form wire:submit="submit" class="space-y-6">
                <flux:input wire:model="name" label="Name" placeholder="Name" />

                <flux:checkbox.group wire:model="permissions" label="Permissions">
                    @foreach($allPermissions as $permission)
                        <flux:checkbox label="{{$permission->name}}" value="{{$permission->name}}" />
                    @endforeach
                </flux:checkbox.group>

                <flux:button type="submit" variant="primary">Update</flux:button>
            </form>
        </div>

    </div>

</div>
