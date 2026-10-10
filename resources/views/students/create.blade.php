// Angel Delmo

@extends('layouts.app')
@section('title', 'Register Student')
@section('content')

<style>
    .form-card {
        background: white;
        max-width: 700px;
        margin: 0 auto;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .form-card h2 {
        margin-top: 0;
    }
    .form-group {
        margin-bottom: 18px;
    }
    .form-group label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
    }
    .form-group input {
        width: 100%;
        padding: 11px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
    }
    .form-group input:focus {
        outline: none;
        border-color: #2563eb;
    }
    .form-group input.is-invalid {
        border-color: #dc2626;
    }
    .error-text {
        display: block;
        margin-top: 5px;
        color: #dc2626;
        font-size: 13px;
    }
    .form-actions {
        margin-top: 25px;
    }
    .btn {
        display: inline-block;
        padding: 10px 16px;
        border-radius: 6px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-size: 15px;
    }
    .btn-primary {
        background: #2563eb;
        color: white;
    }
    .btn-primary:hover {
        background: #1d4ed8;
    }
    .btn-secondary {
        background: #e5e7eb;
        color: #333;
        margin-left: 8px;
    }

    .btn-secondary:hover {
        background: #d1d5db;
    }
</style>

<div class="form-card">

    <h2>Register Student</h2>
    <p>Add a new student to the RMMC Student Directory.</p>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="student_number">Student Number</label>
            <input type="text" id="student_number" name="student_number"
                   placeholder="Enter student number"
                   value="{{ old('student_number') }}"
                   class="@error('student_number') is-invalid @enderror">
            @error('student_number')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name"
                   placeholder="Enter first name"
                   value="{{ old('first_name') }}"
                   class="@error('first_name') is-invalid @enderror">
            @error('first_name')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name"
                   placeholder="Enter last name"
                   value="{{ old('last_name') }}"
                   class="@error('last_name') is-invalid @enderror">
            @error('last_name')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="program">Program</label>
            <input type="text" id="program" name="program"
                   placeholder="Enter program"
                   value="{{ old('program') }}"
                   class="@error('program') is-invalid @enderror">
            @error('program')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="year_level">Year Level</label>
            <input type="number" id="year_level" name="year_level"
                   min="1" max="4"
                   placeholder="Enter year level"
                   value="{{ old('year_level') }}"
                   class="@error('year_level') is-invalid @enderror">
            @error('year_level')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"
                   placeholder="Enter email"
                   value="{{ old('email') }}"
                   class="@error('email') is-invalid @enderror">
            @error('email')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Register Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>

</div>

@endsection