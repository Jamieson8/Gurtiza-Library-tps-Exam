@extends('layouts.app')

@section('content')
<h1>Add New Student</h1>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <input type="text" name="studentNumber" placeholder="Student Number" required><br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="text" name="fname" placeholder="First Name" required><br>
    <input type="text" name="mi" placeholder="MI"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="contactNumber" placeholder="Contact Number"><br>

    <label>Section</label>
    <select name="section_id">
        <option value="">-- none --</option>
        @foreach($sections as $section)
            <option value="{{ $section->id }}">{{ $section->name }}</option>
        @endforeach
    </select><br>

    <button type="submit">Save</button>
</form>
@endsection
