@props(['stacked' => true])

<div {{ $attributes->class(['robot-card rounded-2', 'd-flex flex-column' => $stacked]) }}>
    {{ $slot }}
</div>
