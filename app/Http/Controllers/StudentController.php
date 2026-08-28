<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of all registered students.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);

        return view('students.index', compact('students'));
    }

    /**
     * Show the student registration form.
     */
    public function create()
    {
        $student = new Student();

        return view('students.create', compact('student'));
    }

    /**
     * Validate and store a newly registered student.
     */
    public function store(StoreStudentRequest $request)
    {
        $validated = $request->validated();

        // Store the profile picture inside storage/app/public/profile_pictures
        // and keep only the relative path in the database.
        $path = $request->file('profile_picture')->store('profile_pictures', 'public');
        $validated['profile_picture'] = $path;

        $student = Student::create($validated);

        return redirect()
            ->route('students.show', $student->id)
            ->with('success', 'Student registered successfully!');
    }

    /**
     * Display a single registered student's details.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}
