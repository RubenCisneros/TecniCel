<div>
    <label for="{{ $attributes->get('id') }}">{{ $label }}</label>
    <input type="checkbox"
        {{ $attributes->class([
            'checkbox-primary' => $color=='primary',
            'checkbox-secondary' => $color=="secondary"]) }}>
</div>
