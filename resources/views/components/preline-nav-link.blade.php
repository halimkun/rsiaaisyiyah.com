@props(['active'])

@php
$classes = ($active ?? false)
    ? 'font-semibold text-blue-600 sm:py-6'
    : 'font-semibold text-slate-800/[.8] hover:text-slate-800 sm:py-6';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>