@extends('layout.app')
@section('title', 'Error Page')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/errorPage.css') }}" />
@endsection
@section('content')
    <section id="error-page">
        <h1>Page Not Found</h1>
        <h1>{{ $error ?? '' }}</h1>
    </section>
@endsection
