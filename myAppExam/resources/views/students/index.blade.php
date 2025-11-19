@extends('layouts.app')

@section('content')
<h1>Students List</h1>
<a href="{{ route('students.create') }}">Add Student</a>
<ul>
@foreach($students as $student)
    <li>
        {{ $student->studentNumber }} - {{ $student->lname }}, {{ $student->fname }}
        (Section: {{ $student->section->name ?? 'None' }})
        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
