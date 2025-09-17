<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StudentRequest;

use App\Models\Student;
use App\Models\Group;
use App\Models\Lesson;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(13);

        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        $lessons = Lesson::all();

        return view('create', compact('groups', 'lessons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $data = $request -> validated();

        $lessons = $data['lessons'];
        unset($data['lessons']);

        $student = Student::create($data);
        $student -> lessons() ->attach($lessons);

        return redirect() -> route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);

        return view('show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);

        $groups = Group::all();
        $lessons = Lesson::all();

        return view('edit', compact('student', 'groups', 'lessons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        $student = Student::findOrFail($id);
        
        $data = $request -> validated();

        $lessons = $data['lessons'];
        unset($data['lessons']);

        $student -> update($data);
        $student -> lessons() ->sync($lessons);

        return redirect() -> route('students.show', $student->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);

        $student -> delete();

        return redirect() -> route('students.index');
    }
}
