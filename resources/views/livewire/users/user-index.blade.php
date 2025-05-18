<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your all users') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        @session('success')
            <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                </svg>
                <span class="font-medium"> {{ $value }} </span>
            </div>
        @endsession
        @can('user.create')
        <a href="{{route('users.create')}}" class="bg-green-500 hover:bg-green-600 text-white text-xs px-3 py-1 rounded mr-2">Create User</a>
        @endcan
        <div class="overflow-x-auto rounded-lg shadow mt-4">
          <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100">
              <tr>
                <th class="px-6 py-3 text-left font-medium text-gray-600">#</th>
                <th class="px-6 py-3 text-left font-medium text-gray-600">Name</th>
                <th class="px-6 py-3 text-left font-medium text-gray-600">Email</th>
                <th class="px-6 py-3 text-center font-medium text-gray-600">Actions</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
            @foreach($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-700">1</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{route('users.show',[$user->id])}}"  class="bg-gray-500 hover:bg-gray-600 text-white text-xs px-3 py-1 rounded mr-2">Show</a>
                        @can('user.edit')
                        <a href="{{route('users.edit',[$user->id])}}"  class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1 rounded mr-2">Edit</a>
                        @endcan
                        @can('user.delete')
                        <button wire:click="delete({{$user->id}})" wire:confirm="Are you sure to remove this user?" class="bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded">Delete
                        @endcan
                    </td>
                </tr>
            @endforeach

            </tbody>
          </table>

        </div>
    </div>
</div>
