@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Section</h2>

    <form action="{{ route('sections.update', $section->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="sectionName" class="form-label">Section Name</label>
            <input type="text" name="sectionName" id="sectionName" class="form-control" value="{{ $section->name }}" required>
        </div>

        <div class="mb-3">
            <label for="yearLevel" class="form-label">Year Level</label>
            <input type="number" name="yearLevel" id="yearLevel" class="form-control" value="{{ $section->year_level }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
