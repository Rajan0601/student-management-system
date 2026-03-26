<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // 🔍 Show students + search
    public function index(Request $request)
    {
        $search = $request->search;

        $students = Student::when($search, function ($query) use ($search) {
            return $query->where('name', 'like', "%$search%");
        })->get();

        return view('students.index', compact('students'));
    }

    // ➕ Show add form
    public function create()
    {
        return view('students.create');
    }

    // 💾 Store student
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('/students')->with('success', 'Student added successfully!');
    }

    // ✏️ Show edit form
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    // 🔄 Update student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect('/students')->with('success', 'Student updated successfully!');
    }

    // ❌ Delete student
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/students')->with('success', 'Student deleted successfully!');
    }
}