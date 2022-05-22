<a {{ $attributes->class(['btn',
    'btn-primary' => $color=='primary',
        'btn-secondary' => $color=='secondary',
        'btn-red' => $color=='red',
        'btn-green' => $color=='green',
        'btn-orange' => $color=='orange'])}}>
           {{ $slot }}
    </a>
