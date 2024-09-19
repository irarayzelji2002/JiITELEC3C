@extends('layout.app')
@section('title', 'Test')
@section('content')
    <section id="test" style="line-height:1;">
        <h1>Test Page2</h1>
        <h2>{{ $testname ?? '' }}</h2>
    </section>
@endsection
