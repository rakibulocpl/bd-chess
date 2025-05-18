<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for Create User') }}</flux:subheading>
        <flux:separator variant="subtle"/>
    </div>

    <div>
        <a href="{{route('users.index')}}"
           class="bg-green-500 hover:bg-green-600 text-white text-xs px-3 py-1 rounded mr-2">Back</a>
        <div class="w-150 mt-6">
            <form wire:submit="submit" class="space-y-6">
                <flux:input wire:model="name" label="Name" placeholder="Name" />
                <flux:input wire:model="email" label="Email" placeholder="Email" />
                <flux:input wire:model="password" type="password" label="Password" placeholder="Password" />
                <flux:input wire:model="confirm_password" type="password" label="Confirm Password" placeholder="Password" />
                <flux:checkbox.group wire:model="roles" label="Roles">
                @foreach($allRoles as $role)
                    <flux:checkbox label="{{$role->name}}" value="{{$role->name}}" />
                    @endforeach
                    </flux:checkbox.group>
                <flux:button type="submit" variant="primary">Submit</flux:button>
            </form>
        </div>

    </div>

</div>
