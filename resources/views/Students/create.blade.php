<!-- resources/views/students/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Create Student</h2>
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Student</button>
    </form>
@endsection
