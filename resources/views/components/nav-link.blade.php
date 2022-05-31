@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center mt-4 py-2 px-6 bg-gray-700/50 text-gray-100'
                : 'flex items-center mt-4 py-2 px-6 text-gray-100 hover:bg-gray-700/20';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon ?? '' }}
    <span class="mx-3 w-full">{{ $slot }}</span>
</a>
