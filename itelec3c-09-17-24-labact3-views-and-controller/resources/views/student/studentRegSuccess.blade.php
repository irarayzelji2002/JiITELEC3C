@extends('layout.app')
@section('title', 'Student Registration Success')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/studentReg.css') }}" />
@endsection
@section('content')
    <section class="student-reg-success" id="student-reg-success">
        @if (isset($data))
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
        @else
            <div class="d-flex justify-content-center student-reg-form-cont">
                <div class="card student-reg-card">
                    <div class="card-body">
                        <h3 class="card-title student-reg-title poppins-bold">You have successfully registered for admission!
                        </h3>
                        <div class="details">
                            <h5 class="card-text student-reg-h3 poppins-bold">Submitted Details</h5>
                            <div class="detail">
                                <div class="poppins-semibold">Firstname</div>
                                <div>Ira Rayzel</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Lastname</div>
                                <div>Ji</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Student Number</div>
                                <div>2020140320</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Gender</div>
                                <div>Female</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Birthday</div>
                                <div>2002-12-26</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Course</div>
                                <div>BS in Information Technology</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Email Address</div>
                                <div>irarayzelji@gmail.com</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Contact Number</div>
                                <div>09985748368</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Additional Information</div>
                                <div>None</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
