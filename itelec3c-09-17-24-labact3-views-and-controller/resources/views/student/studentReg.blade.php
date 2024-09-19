@extends('layout.app')
@section('title', 'Student Registration')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/studentReg.css') }}" />
@endsection
@section('content')
    <section id="student-reg">
        <h1>Student Registration</h1>
        <p>Thank you for applying to our college. Please fill in the form below to complete the registration process for
            admission.</p>

        <form action="{{ route('student-reg-submit') }}" method="POST">
            @csrf
            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required><br>

            <label for="lastname">Lastname:</label>
            <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required><br>

            <label for="studentNo">Student Number:</label>
            <input type="text" id="studentNo" name="studentNo" value="{{ old('studentNo') }}" required><br>

            <label>Gender:</label>
            <input type="radio" id="female" name="gender" value="Female"
                {{ old('gender') == 'Female' ? 'checked' : '' }}>
            <label for="female">Female</label>

            <input type="radio" id="male" name="gender" value="Male"
                {{ old('gender') == 'Male' ? 'checked' : '' }}>
            <label for="male">Male</label>

            <input type="radio" id="others" name="gender" value="Others"
                {{ old('gender') == 'Others' ? 'checked' : '' }}>
            <label for="others">Others</label><br>

            <label for="birthday">Birthday:</label>
            <input type="text" id="birthday" name="birthday" placeholder="dd/mm/yyyy" value="{{ old('birthday') }}"
                required><br>

            <label for="course">Course:</label>
            <select id="course" name="course">
                <option value="BS in Information Technology"
                    {{ old('course') == 'BS in Information Technology' ? 'selected' : '' }}>BS in Information Technology
                </option>
                <option value="BS in Computer Science" {{ old('course') == 'BS in Computer Science' ? 'selected' : '' }}>
                    BS in Computer Science</option>
                <option value="BS in Information Systems"
                    {{ old('course') == 'BS in Information Systems' ? 'selected' : '' }}>BS in Information Systems
                </option>
            </select><br>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

            <label for="contactNo">Contact Number:</label>
            <input type="text" id="contactNo" name="contactNo" value="{{ old('contactNo') }}" required><br>

            <label for="additionalInfo">Additional Information:</label>
            <textarea id="additionalInfo" name="additionalInfo">{{ old('additionalInfo') }}</textarea><br>

            <button type="submit">Register</button>
        </form>
    </section>
@endsection
