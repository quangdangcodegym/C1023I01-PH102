<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')
            ->join('classname', 'students.classname_id', "=", 'classname.id')
            ->select('students.*', 'classname.id as classname_id', 'classname.name as classname_name')
            ->get();

        return view("student.students", compact('students'));
    }
    public function showAddStudent()
    {
        $classnames = DB::table('classname')->get();
        return view("student.create_student", compact('classnames'));
    }

    public function saveStudent(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $classname_id = $request->classname_id;

        DB::table('students')
            ->insert([
                'name' => $name,
                'phone' => $phone,
                'classname_id' => $classname_id
            ]);

        return redirect('/student');
    }
}
