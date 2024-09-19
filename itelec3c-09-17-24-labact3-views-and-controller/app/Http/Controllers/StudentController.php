<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display the registration form
    public function showForm()
    {
        return view('student.studentReg');
    }

    // Process the form submission and pass data to the next page
    public function submitForm(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'studentNo' => 'required|digits:10',
            'gender' => 'required',
            'birthday' => 'required|date|before_or_equal:today',
            'course' => 'required',
            'email' => 'required|email|max:255',
            'contactNo' => 'required|digits:11',
            'additionalInfo' => 'nullable|max:255'
        ]);

        // Pass data to the view
        return view('student.studentRegSuccess', ['data'=>$validatedData]);
    }
}
