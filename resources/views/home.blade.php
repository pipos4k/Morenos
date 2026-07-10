@extends('layouts.app')

@section('bodyClass', 'site-background')

@section('content')

    @include('partials.hero')

    <main id="main">
        <div class="sigma-wrapper">
            <div class="sigma-logo">
                <img src="images/Sigma-Vector.svg">
            </div>

            @include('partials.about-us')
            @include('partials.advanced-products')

        </div>

        @include('partials.services')

        @include('partials.partners')

        @include('partials.blog')

        @include('partials.contact')

        @include('partials.footer')
    </main>
@endsection
