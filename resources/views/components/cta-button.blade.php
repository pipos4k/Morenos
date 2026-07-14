@props([
    'href' => '#',
    'variant' => 'primary',
])

<div class="button-wrapper">
    <a href="{{ $href }}">
        <button type="button"
            {{ $attributes->class([
                'btn rounded-5 w-auto btn-style',
                'btn-primary btn-arrow' => $variant === 'primary',
                'btn-outline-light btn-explore-services' => $variant === 'outline-light',
            ]) }}>
            {{ $slot }}
            @if ($variant === 'primary')
                <span class="arrow">&rarr;</span>
            @endif
        </button>
    </a>
</div>
