@extends('layout.app')
@section('title', 'Student Registration Success')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/studentRegSuccess.css') }}" />
@endsection
@section('content')
    <section id="student-reg-success">
        <h1>You have successfully registered for admission.</h1>

        <h2>Submitted Details</h2>
        <p><strong>Firstname:</strong> {{ $data['firstname'] }}</p>
        <p><strong>Lastname:</strong> {{ $data['lastname'] }}</p>
        <p><strong>Student Number:</strong> {{ $data['studentNo'] }}</p>
        <p><strong>Gender:</strong> {{ $data['gender'] }}</p>
        <p><strong>Birthday:</strong> {{ $data['birthday'] }}</p>
        <p><strong>Course:</strong> {{ $data['course'] }}</p>
        <p><strong>Email Address:</strong> {{ $data['email'] }}</p>
        <p><strong>Contact Number:</strong> {{ $data['contactNo'] }}</p>
        <p><strong>Additional Information:</strong> {{ $data['additionalInfo'] }}</p>
    </section>
@endsection
