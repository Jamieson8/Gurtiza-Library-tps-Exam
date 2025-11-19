@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sections</h2>

    <a href="{{ route('sections.create') }}" class="btn btn-success mb-3">Add Section</a>

    @if($sections->isEmpty())
        <p>No sections available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Section Name</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sections as $section)
                <tr>
                    <td>{{ $section->id }}</td>
                    <td>{{ $section->name }}</td>
                    <td>{{ $section->year_level }}</td>
                    <td>
                        <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{ route('sections.destroy', $section->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this section?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
