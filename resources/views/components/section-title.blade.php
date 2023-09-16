@props([
    'text' => "",
    'title',
    'subtitle',
    'align' => 'center',
])

<div class="mb-10 text-{{ $align }}">
    <div class="text-blue-600 font-bold mb-4 capitalize">
        {{ $text }}
    </div>
    <div class="text-gray-900 text-2xl md:text-4xl font-bold capitalize">
        {{ $title }}
    </div>
    <div class="text-gray-600 md:text-lg capitalize">
        {{ $subtitle }}
    </div>
</div>