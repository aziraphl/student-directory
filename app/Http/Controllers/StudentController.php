<?php
//Angel Delmo
namespace App\Http\Controllers;

use App\Models\Student;
class StudentController extends Controller
{
    public function index()
    {
        $search = request('search');

        if ($search) {
            $students = Student::where('student_number', 'like', "%$search%")
                ->orWhere('first_name', 'like', "%$search%")
                ->orWhere('last_name', 'like', "%$search%")
                ->orderBy('last_name')
                ->orderBy('first_name')
                ->get();
        } else {
            $students = Student::orderBy('last_name')->orderBy('first_name')->get();
        }

        $totalStudents = Student::count();

        return view('students.index', compact('students', 'totalStudents', 'search'));
    }

    public function create()
    {
        return view('students.create');
    }
    public function store()
    {
        request()->validate([
            'student_number' => 'required|unique:students,student_number',
            'first_name' => 'required',
            'last_name' => 'required',
            'program' => 'required',
            'year_level' => 'required|integer|min:1|max:4',
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create([
            'student_number' => request('student_number'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'program' => request('program'),
            'year_level' => request('year_level'),
            'email' => request('email'),
        ]);

        return redirect('/students')->with('success', 'Student registered successfully!');
    }
}