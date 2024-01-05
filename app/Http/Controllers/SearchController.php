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



    public function searchStudentNumber(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate(['student_number' => 'required|string',]);

        // Check if student number exists in the database
        $student = Student::where('student_number', $validatedData['student_number'])->first();

        if ($student) {

            // Student found, store in session
            session(['student_data' => $student]);

            // Redirect to the result route
            return redirect()->route('result');

        } else {
            // Use session() to set the status data
            session([
                'status_title' => 'Oops!',
                'status' => 'Student number not found!',
                'status_code' => 'error',
                'status_timer' => 100000,
            ]);

            // Additional SweetAlert customization
            return redirect()->route('goBack');
        }
    }

    public function studentDataExists()
    {
        // Check if student data exists in the session
        $studentData = session('student_data');

        if ($studentData) {
            // Student data found, display the result
            return view('result', ['student' => $studentData]);
        } else {
            // Redirect to the index page if no student data in the session
            return redirect()->route('goBack');
        }
    }
}
