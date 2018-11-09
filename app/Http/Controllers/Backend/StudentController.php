<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\StudentRequest;
use App\Student;
use App\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        $states = State::all();
        return view('Backend.student.create', compact('states'));
    }

    public function store(StudentRequest $request) {
        $student = new Student();
        $student->name = $request->input('name');
        $student->matrix_number = $request->input('matrix_number');
        $student->ic_number = $request->input('ic_number');
        $student->state_id = $request->input('state');

        if ($student->save()) {
            return redirect('/student/create')->with('successMessage','Student has been successfully created');
        } else {
            return back()->with('errorMessage','Unable to create student user into database. Contact admin');
        }
    }

    public function index() {
        $students = Student::all();
        return view('Backend.student.index',compact('students'));
    }

    public function show($id) {
        $student = Student::findOrFail($id);
        return view('Backend.student.show',compact('student'));
    }

    public function edit($id) {
        $student = Student::findOrFail($id);
        $states = State::all();
        return view('Backend.student.edit',compact('student', 'states'));
    }

    public function update($id, Request $request) {
        $student = Student::findOrFail($id);
        $student->name = $request->input('name');
        $student->matrix_number = $request->input('matrix_number');
        $student->ic_number = $request->input('ic_number');
        $student->state_id = $request->input('state');

        if ($student->save()) {
            return redirect('/student')->with('successMessage','Student has been successfully updated');
        } else {
            return back()->with('errorMessage','Unable to update student into database. Contact admin');
        }
    }

    public function destroy($id) {
        $student = Student::findOrFail($id);

        if ($student->delete()) {
            return redirect('/student')->with('successMessage','Student has been successfully deleted');
        } else {
            return back()->with('errorMessage','Unable to delete student into database. Contact admin');
        }
    }
}
