<!-- resources/views/components/save-button.blade.php -->
@props(['type' => 'submit'])

<button type="{{ $type }}" class="btn btn-warning" name="submit">
    {{ $slot }}
</button>
