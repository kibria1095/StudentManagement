<!-- resources/views/students/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $student->age }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
@endsection
