@extends('layout.app')
@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}" />
@endsection
@section('content')
    <section class="homepage" id="homepage">
        <h1 class="homepage-title">
            <span class="playfair-display-extrabold uppercase">Welcome to</span>
            <span class="playfair-display-extrabold uppercase hotel-transylvania-text">Meralco Billing Portal</span>
            <a class="btn btn-primary btn-red btn-reserve" href="{{ route('billing-form') }}" role="button">
                Add and Compute Billing
            </a>
            <a class="btn btn-primary btn-green btn-reserve" href="{{ route('check-billing-form') }}" role="button">
                Check exisitng billing
            </a>
        </h1>
    </section>
@endsection
