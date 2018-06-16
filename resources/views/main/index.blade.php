@extends('layout')

@section('content')

<div class="container">
    @include('partials.header')
    @include('partials.nav')
    @include('partials.jumbotron')
    @include('partials.shortcutPost')
</div>

    {{--@include('partials.main')--}}
    @include('partials.footer')

@endsection