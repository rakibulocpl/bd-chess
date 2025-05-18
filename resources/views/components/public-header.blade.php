@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <h1 class="text-3xl font-bold mb-2">{{ $title }}</h1>
    <p class="text-lg text-gray-600">{{ $description }}</p>
</div>
