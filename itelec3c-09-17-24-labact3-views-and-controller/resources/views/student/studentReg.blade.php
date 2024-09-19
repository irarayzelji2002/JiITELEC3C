@extends('layout.app')
@section('title', 'Student Registration')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/studentReg.css') }}" />
@endsection
@section('content')
    <section class="student-reg" id="student-reg">
        <div class="d-flex justify-content-center student-reg-form-cont">
            <div class="card student-reg-card">
                <div class="card-body">
                    <h2 class="card-title student-reg-title poppins-bold">Student Registration</h2>
                    <p class="card-text student-reg-p poppins-regular">
                        Thank you for applying to our college. Please fill in the form below to complete the registration
                        process for admission.
                    </p>
                    <form class="student-reg-form" action="{{ route('student-reg-submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-xl-6 col-lg-12">
                                <label class="poppins-semibold" for="firstname">
                                    Firstname
                                    <span class="required-span">*</span>
                                </label>
                                <input class="form-control" type="text" id="firstname" name="firstname" maxlength="255"
                                    value="{{ old('firstname') }}" required>
                            </div>

                            <div class="form-group col-xl-6 col-lg-12">
                                <label class="poppins-semibold" for="lastname">
                                    Lastname
                                    <span class="required-span">*</span>
                                </label>
                                <input class="form-control" type="text" id="lastname" name="lastname" maxlength="255"
                                    value="{{ old('lastname') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="studentNo">
                                Student Number
                                <span class="required-span">*</span>
                            </label>
                            <input class="form-control" type="text" id="studentNo" name="studentNo" maxlength="10"
                                value="{{ old('studentNo') }}" required>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold">
                                Gender
                                <span class="required-span">*</span>
                            </label><br>
                            <div class="d-flex">
                                <div class="form-check form-check-inline flex-fill">
                                    <input class="form-check-input" type="radio" id="female" name="gender"
                                        value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                                    <label class="form-check-label poppins-regular" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline flex-fill">
                                    <input class="form-check-input" type="radio" id="male" name="gender"
                                        value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                                    <label class="form-check-label poppins-regular" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline flex-fill">
                                    <input class="form-check-input" type="radio" id="others" name="gender"
                                        value="Others" {{ old('gender') == 'Others' ? 'checked' : '' }}>
                                    <label class="form-check-label poppins-regular" for="others">Others</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="birthday">
                                Birthday
                                <span class="required-span">*</span>
                            </label>
                            <input class="form-control" type="date" id="birthday" name="birthday"
                                value="{{ old('birthday') }}" required>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="course">Course</label>
                            <select class="form-select" id="course" name="course">
                                <option value="BS in Information Technology"
                                    {{ old('course') == 'BS in Information Technology' ? 'selected' : '' }}>
                                    BS in Information Technology
                                </option>
                                <option value="BS in Computer Science"
                                    {{ old('course') == 'BS in Computer Science' ? 'selected' : '' }}>
                                    BS in Computer Science</option>
                                <option value="BS in Information Systems"
                                    {{ old('course') == 'BS in Information Systems' ? 'selected' : '' }}>
                                    BS in Information Systems
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="email">
                                Email Address
                                <span class="required-span">*</span>
                            </label>
                            <input class="form-control" type="email" id="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="contactNo">
                                Contact Number
                                <span class="required-span">*</span>
                            </label>
                            <input class="form-control" type="text" id="contactNo" name="contactNo" maxlength="11"
                                value="{{ old('contactNo') }}" required>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="additionalInfo">Additional Information</label>
                            <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="5" maxlength="255">{{ old('additionalInfo') }}</textarea>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-yellow btn-reg">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
