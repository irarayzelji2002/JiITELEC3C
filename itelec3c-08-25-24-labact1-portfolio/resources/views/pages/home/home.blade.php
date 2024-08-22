@extends('layout.app')

@section('title', 'Home')

@section('content')
<h1>Welcome to My Portfolio</h1>
<p>This is the home page content.</p>
@include('pages.home.header')
@include('pages.home.about')
@include('pages.home.skills')
@include('pages.home.top-projects')
@include('pages.home.contact')
@endsection
