@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-large text-md text-gray-700 ']) }}>
    {{ $value ?? $slot }}
</label>
