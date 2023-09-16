@props(['title', 'size' => 'lg', 'weight' => 'semibold'])

@php
    $weight = str_replace('font-', '', $weight);
    $size = str_replace('text-', '', $size);

    $class = "text-$size font-$weight";
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $title }}
</div>