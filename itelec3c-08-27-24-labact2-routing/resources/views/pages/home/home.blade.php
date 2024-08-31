@extends('layout.app')
@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/skills.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tech-stack.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/design-softwares.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/top-projects-it.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/top-projects-arts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/get-in-touch.css') }}" />
@endsection
@section('content')
    @include('pages.home.header')
    @include('pages.home.skills')
    @include('pages.home.tech-stack')
    @include('pages.home.design-softwares')
    @include('pages.home.top-projects-it')
    @include('pages.home.top-projects-arts')
    @include('pages.home.get-in-touch')
@endsection
