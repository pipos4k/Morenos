@props([
    'top' => '25%',
    'left' => '74%',
])

<div {{ $attributes->class(['sigma-wrapper']) }}>
    <div class="sigma-logo" style="top: {{ $top }}; left: {{ $left }};">
        <img src="images/Sigma-Vector.svg">
    </div>

    {{ $slot }}
</div>
