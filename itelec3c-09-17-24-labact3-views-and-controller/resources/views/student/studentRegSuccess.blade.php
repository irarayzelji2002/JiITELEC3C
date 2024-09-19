@extends('layout.app')
@section('title', 'Student Registration Success')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/studentReg.css') }}" />
@endsection
@section('content')
    <section class="student-reg-success" id="student-reg-success">
        @if (isset($data))
            <div class="d-flex justify-content-center student-reg-form-cont">
                <div class="card student-reg-success-card">
                    <div class="card-body">
                        <div class="title-cont">
                            <h3 class="card-title student-reg-success-title poppins-bold success">
                                You have successfully registered for admission!
                            </h3>
                            <p class="card-text student-reg-p poppins-regular light-grey">
                                You may close this tab.
                            </p>
                        </div>
                        <div class="details">
                            <h5 class="card-text student-reg-h3 poppins-bold">Submitted Details</h5>
                            <div class="detail">
                                <div class="poppins-semibold">First Name</div>
                                <div>{{ $data['firstName'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Last Name</div>
                                <div>{{ $data['lastName'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Student Number</div>
                                <div>{{ $data['studentNo'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Gender</div>
                                <div>{{ $data['gender'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Birthday</div>
                                <div>{{ $data['birthday'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Course</div>
                                <div>{{ $data['course'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Email Address</div>
                                <div>{{ $data['email'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Contact Number</div>
                                <div>{{ $data['contactNo'] }}</div>
                            </div>
                            <div class="detail">
                                <div class="poppins-semibold">Additional Information</div>
                                <div>{{ $data['additionalInfo'] ?? 'None' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="d-flex justify-content-center student-reg-form-cont">
                <div class="card student-reg-success-card">
                    <div class="card-body">
                        <div class="title-cont">
                            <h3 class="card-title student-reg-success-title poppins-bold error">
                                An error occurred when registering.
                            </h3>
                            <p class="card-text student-reg-p poppins-regular light-grey">
                                Please register again by clicking the button below.
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary btn-yellow" href="{{ route('student-reg') }}" role="button">
                                Register as a Student
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
