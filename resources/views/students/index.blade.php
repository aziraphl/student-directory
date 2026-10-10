// Angel Delmo

@extends('layouts.app')
@section('title', 'Student List')
@section('content')

<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .page-header h2 {
        margin: 0;
    }

    .btn {
        display: inline-block;
        padding: 10px 16px;
        background: #2563eb;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        border: none;
        cursor: pointer;
    }

    .btn:hover {
        background: #1d4ed8;
    }

    .table-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background: #1f2937;
        color: white;
    }

    tr:nth-child(even) {
        background: #f8f8f8;
    }

    tr:hover {
        background: #e5e7eb;
    }
    .search-form {
    display: flex;
    gap: 8px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

    .search-form input {
        flex: 1;
        min-width: 220px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
    }

    .search-form input:focus {
        outline: none;
        border-color: #2563eb;
    }

    .btn-clear {
        background: #e5e7eb;
        color: #333;
    }

    .btn-clear:hover {
        background: #d1d5db;
    }

    @media (max-width: 700px) {
        .page-header {
            display: block;
        }

        .page-header .btn {
            margin-top: 10px;
        }
    }
</style>

@if (session('success'))
    <div style="background: #d1fae5; color: #065f46; padding: 12px 16px; border-radius: 6px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif

<div class="page-header">
    <div>
        <h2>Student List</h2>
        <p>View all registered RMMC students.</p>
        <p><strong>Total Students: {{ $totalStudents }}</strong></p>
    </div>

    <a href="{{ route('students.create') }}" class="btn">
        + Register Student
    </a>
</div>

<form action="{{ route('students.index') }}" method="GET" class="search-form">
    <input
        type="text"
        name="search"
        placeholder="Search by student number, first name, or last name"
        value="{{ $search }}"
    >
    <button type="submit" class="btn">Search</button>

    @if ($search)
        <a href="{{ route('students.index') }}" class="btn btn-clear">Clear</a>
    @endif
</form>

<div class="table-card">

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Program</th>
                <th>Year Level</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->student_number }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->program }}</td>
                    <td>{{ $student->year_level }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align:center;">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection