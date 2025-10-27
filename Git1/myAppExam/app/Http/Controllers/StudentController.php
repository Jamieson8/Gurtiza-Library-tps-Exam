<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $sections = Section::all();
        return view('students.create', compact('sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'studentNumber' => 'required|unique:students,studentNumber|max:9',
            'lname' => 'required|max:150',
            'fname' => 'required|max:150',
            'mi' => 'nullable|max:2',
            'email' => 'required|email',
            'contactNumber' => 'required|max:20',
            'section_id' => 'nullable|exists:sections,id',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        $sections = Section::all();
        return view('students.edit', compact('student', 'sections'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'studentNumber' => 'required|max:9|unique:students,studentNumber,' . $student->id,
            'lname' => 'required|max:150',
            'fname' => 'required|max:150',
            'mi' => 'nullable|max:2',
            'email' => 'required|email',
            'contactNumber' => 'required|max:20',
            'section_id' => 'nullable|exists:sections,id',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}


