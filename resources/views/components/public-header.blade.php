@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <h1 class="text-2xl md:text-3xl font-bold mb-2">{{ $title }}</h1>
    <p class="text-sm md:text-lg text-gray-600">{{ $description }}</p>
</div>
