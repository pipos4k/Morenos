@props(['title', 'image'])

<div class="service-card">
    <h2 class="card-h2">{{ $title }}</h2>
    <p>{{ $slot }}</p>
    <div>
        <img src="{{ $image }}" />
    </div>
</div>
