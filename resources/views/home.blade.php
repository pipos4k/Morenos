@extends('layouts.app')

@section('title', 'Morenos')
@section('description', 'Explore Morenos')
@section('bodyClass', 'site-background')


@section('content')

    @include('partials.hero')

    <main id="main">
        <x-sigma-wrapper>
            @include('partials.about-us')
            @include('partials.advanced-products')
        </x-sigma-wrapper>

        @include('partials.services')

        @include('partials.partners')

        @include('partials.blog')

        @include('partials.contact')

        @include('partials.footer')
    </main>
@endsection
