<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('User details information') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>

        <a href="{{route('users.index')}}" class="bg-gray-500 hover:bg-gray-600 text-white text-xs px-3 py-1 rounded mr-2">Back</a>
        <div class="w-150">
            <p class="mt-2"><strong>Name: </strong> {{$user->name}}</p>
            <p class="mt-2"><strong>Email: </strong> {{$user->email}}</p>
            <p class="mt-2"><strong>Roles: </strong>
                @if($user->roles)
                    @foreach($user->roles as $role)
                        <flux:badge>{{$role->name}}</flux:badge>
                    @endforeach
                @endif
            </p>

        </div>
    </div>
</div>
