@props(['title'])

<div {{ $attributes->merge(['class' => 'relative flex w-full flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md']) }}>
    <div class="p-6">
        <h5 class="text-blue-gray-900 mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal antialiased">{{ $title }}</h5>
        {{ $slot }}
    </div>
</div>
