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
                                <label class="poppins-semibold" for="irjFirstName">
                                    First Name
                                    <span class="text-danger">*</span>
                                    @error('irjFirstName')
                                        <span class="text-danger err-msg">{{ $message }}</span>
                                    @enderror
                                </label>

                                <input class="form-control" type="text" id="irjFirstName" name="irjFirstName"
                                    maxlength="255" value="{{ old('irjFirstName') }}">
                            </div>

                            <div class="form-group col-xl-6 col-lg-12">
                                <label class="poppins-semibold" for="irjLastName">
                                    Last Name
                                    <span class="text-danger">*</span>
                                    @error('irjLastName')
                                        <span class="text-danger err-msg">{{ $message }}</span>
                                    @enderror
                                </label>
                                <input class="form-control" type="text" id="irjLastName" name="irjLastName"
                                    maxlength="255" value="{{ old('irjLastName') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="irjStudentNo">
                                Student Number
                                <span class="text-danger">*</span>
                                @error('irjStudentNo')
                                    <span class="text-danger err-msg">{{ $message }}</span>
                                @enderror
                            </label>
                            <input class="form-control" type="text" id="irjStudentNo" name="irjStudentNo" maxlength="10"
                                value="{{ old('irjStudentNo') }}">
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold">
                                Gender
                                <span class="text-danger">*</span>
                                @error('irjGender')
                                    <span class="text-danger err-msg">{{ $message }}</span>
                                @enderror
                            </label><br>
                            <div class="d-flex">
                                <div class="form-check form-check-inline flex-fill">
                                    <input class="form-check-input" type="radio" id="female" name="irjGender"
                                        value="Female" {{ old('irjGender') == 'Female' ? 'checked' : '' }}>
                                    <label class="form-check-label poppins-regular" for="female">Female</label>
                                </div>
                                <div class="form-check form-check-inline flex-fill">
                                    <input class="form-check-input" type="radio" id="male" name="irjGender"
                                        value="Male" {{ old('irjGender') == 'Male' ? 'checked' : '' }}>
                                    <label class="form-check-label poppins-regular" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline flex-fill">
                                    <input class="form-check-input" type="radio" id="others" name="irjGender"
                                        value="Others" {{ old('irjGender') == 'Others' ? 'checked' : '' }}>
                                    <label class="form-check-label poppins-regular" for="others">Others</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="irjBirthday">
                                Birthday
                                <span class="text-danger">*</span>
                                @error('irjBirthday')
                                    <span class="text-danger err-msg">{{ $message }}</span>
                                @enderror
                            </label>
                            <input class="form-control" type="date" id="irjBirthday" name="irjBirthday"
                                value="{{ old('irjBirthday') }}">
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="irjCourse">Course</label>
                            <select class="form-select" id="irjCourse" name="irjCourse">
                                <option value="BS in Information Technology"
                                    {{ old('irjCourse') == 'BS in Information Technology' ? 'selected' : '' }}>
                                    BS in Information Technology
                                </option>
                                <option value="BS in Computer Science"
                                    {{ old('irjCourse') == 'BS in Computer Science' ? 'selected' : '' }}>
                                    BS in Computer Science</option>
                                <option value="BS in Information Systems"
                                    {{ old('irjCourse') == 'BS in Information Systems' ? 'selected' : '' }}>
                                    BS in Information Systems
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="irjEmail">
                                Email Address
                                <span class="text-danger">*</span>
                                @error('irjEmail')
                                    <span class="text-danger err-msg">{{ $message }}</span>
                                @enderror
                            </label>
                            <input class="form-control" type="irjEmail" id="irjEmail" name="irjEmail"
                                value="{{ old('irjEmail') }}">
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="irjContactNo">
                                Contact Number
                                <span class="text-danger">*</span>
                                @error('irjContactNo')
                                    <span class="text-danger err-msg">{{ $message }}</span>
                                @enderror
                            </label>
                            <input class="form-control" type="text" id="irjContactNo" name="irjContactNo"
                                maxlength="11" value="{{ old('irjContactNo') }}">
                        </div>

                        <div class="form-group">
                            <label class="poppins-semibold" for="irjAdditionalInfo">Additional Information</label>
                            @error('irjAdditionalInfo')
                                <span class="text-danger err-msg">{{ $message }}</span>
                            @enderror
                            <textarea class="form-control" id="irjAdditionalInfo" name="irjAdditionalInfo" rows="4" maxlength="255">{{ old('irjAdditionalInfo') }}</textarea>
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
