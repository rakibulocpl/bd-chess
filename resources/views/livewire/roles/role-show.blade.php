<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Role details information') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>

        <a href="{{route('roles.index')}}" class="bg-gray-500 hover:bg-gray-600 text-white text-xs px-3 py-1 rounded mr-2">Back</a>
        <div class="w-150">
            <p class="mt-2"><strong>Name: </strong> {{$role->name}}
            <p class="mt-t">
                <strong>Permissions</strong>
                @if($role->permissions)
                    @foreach($role->permissions as $permission)
                        <flux:badge>{{$permission->name}}</flux:badge>
                    @endforeach
                @endif
            </p>

        </div>
    </div>
</div>
