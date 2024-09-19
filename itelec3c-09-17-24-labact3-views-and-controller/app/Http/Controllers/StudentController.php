<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display form
    public function showForm()
    {
        return view('student.studentReg');
    }

    // Submit form
    public function submitForm(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'irjFirstName' => 'required|string|max:255',
            'irjLastName' => 'required|string|max:255',
            'irjStudentNo' => 'required|digits:10',
            'irjGender' => 'required',
            'irjBirthday' => 'required|date|before_or_equal:today',
            'irjCourse' => 'required',
            'irjEmail' => 'required|email|max:255',
            'irjContactNo' => 'required|digits:11',
            'irjAdditionalInfo' => 'nullable|max:255'
        ], [
            // Custom error messages
            'irjStudentNo.digits' => 'The student number must be a number of 10 digits.',
            'irjBirthday.before_or_equal' => 'The :attribute cannot be later than today.',
            'irjContactNo.digits' => 'The contact number must be a number of 11 digits.'
        ], [
            // Custom attribute names
            'irjFirstName' => 'first name',
            'irjLastName' => 'last name',
            'irjStudentNo' => 'student number',
            'irjGender' => 'gender',
            'irjBirthday' => 'birthday',
            'irjCourse' => 'course',
            'irjEmail' => 'email',
            'irjContactNo' => 'contact number',
            'irjAdditionalInfo' => 'additional information'
        ]);

        // Pass data to the view
        return view('student.studentRegSuccess', ['data'=>$validatedData]);
    }
}
