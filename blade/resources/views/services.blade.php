@extends('layouts.landing')

@section('title', 'services')

@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'lorem ipsum dolor aimt.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'lorem ipsum dolor aimt.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('content', 'lorem ipsum dolor aimt.')
    @endcomponent
@endsection