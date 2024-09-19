@extends('layout.app')
@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}" />
@endsection
@section('content')
    <section class="homepage" id="homepage">
        <h1 class="homepage-title">
            <span class="poppins-extrabold uppercase">Welcome to</span>
            <span class="poppins-extrabold uppercase ust-text">UST!</span>
            <a class="btn btn-primary btn-blue uppercase" href="{{ route('student-reg') }}" role="button">
                Register as a Student
            </a>
        </h1>
    </section>
@endsection
