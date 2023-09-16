@props(['title', 'id'])

<div class="p-4 bg-gray-100 rounded-xl">
    <button class="text-lg font-semibold text-gray-800 w-full flex items-center justify-between px-2" id="{{ $id }}" data-hs-collapse="#{{ $id }}-heading">
        {{ $title }}
        <i class="fa-solid fa-chevron-down"></i>
    </button>

    <div class="mt-4 hs-collapse hidden w-full overflow-hidden transition-[height] duration-500" id="{{ $id }}-heading" aria-labelledby="{{ $id }}">
        {{ $slot }}
    </div>
</div>