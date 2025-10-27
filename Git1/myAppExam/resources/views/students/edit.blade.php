@extends('layouts.app')

@section('content')
<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="studentNumber" value="{{ $student->studentNumber }}" required><br>
    <input type="text" name="lname" value="{{ $student->lname }}" required><br>
    <input type="text" name="fname" value="{{ $student->fname }}" required><br>
    <input type="text" name="mi" value="{{ $student->mi }}"><br>
    <input type="email" name="email" value="{{ $student->email }}"><br>
    <input type="text" name="contactNumber" value="{{ $student->contactNumber }}"><br>

    <label>Section</label>
    <select name="section_id">
        <option value="">-- none --</option>
        @foreach($sections as $section)
            <option value="{{ $section->id }}" {{ $student->section_id == $section->id ? 'selected' : '' }}>
                {{ $section->name }}
            </option>
        @endforeach
    </select><br>

    <button type="submit">Update</button>
</form>
@endsection
