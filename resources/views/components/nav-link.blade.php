@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'block rounded-md px-3 py-2 text-base font-medium bg-gray-900 text-white'
            : 'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'aria-current' => $active ? 'page' : null]) }}>
    {{ $slot }}
</a>
