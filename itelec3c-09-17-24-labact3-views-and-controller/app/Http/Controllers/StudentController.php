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
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'studentNo' => 'required|digits:10',
            'gender' => 'required',
            'birthday' => 'required|date|before_or_equal:today',
            'course' => 'required',
            'email' => 'required|email|max:255',
            'contactNo' => 'required|digits:11',
            'additionalInfo' => 'nullable|max:255'
        ], [
            // Custom error messages
            'studentNo.digits' => 'The student number must be a number of 10 digits.',
            'birthday.before_or_equal' => 'The :attribute cannot be later than today.',
            'contactNo.digits' => 'The contact number must be a number of 11 digits.'
        ], [
            // Custom attribute names
            'firstName' => 'first name',
            'lastName' => 'last name',
            'studentNo' => 'student number',
            'birthday' => 'birthday',
            'email' => 'email',
            'contactNo' => 'contact number',
        ]);

        // Pass data to the view
        return view('student.studentRegSuccess', ['data'=>$validatedData]);
    }
}
