@props(['value'])
<label {{ $attributes->merge(['class' => 'bform-label']) }}>
    {{ $value ?? $slot }}
</label>
