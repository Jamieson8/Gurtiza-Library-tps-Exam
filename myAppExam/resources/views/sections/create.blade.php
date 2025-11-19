@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Section</h2>

    <form action="{{ route('sections.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="sectionName" class="form-label">Section Name</label>
            <input type="text" name="sectionName" id="sectionName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="yearLevel" class="form-label">Year Level</label>
            <input type="number" name="yearLevel" id="yearLevel" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
