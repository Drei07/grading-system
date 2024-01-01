<?php
// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SearchController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function processForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'student_number' => 'required|numeric',
        ]);

        // Check if student number exists in the database
        $student = Student::where('student_number', $validatedData['student_number'])->first();

        if ($student) {
            // Student found, display the result
            return view('result', ['student' => $student]);
        } else {
            // Use session() to set the status data
            session([
                'status_title' => 'Oops!',
                'status' => 'Student number not found!',
                'status_code' => 'error',
                'status_timer' => 100000,
            ]);

            // Additional SweetAlert customization
            return redirect()->route('index');
        }
    }
}
