@props(['selected' => null])

<select  {{ $attributes->merge(['class' => 'form-select']) }} id="validationTooltip03" required>
    <option value="" selected disabled hidden>Select an option</option>
    {{ $slot }}
</select>
