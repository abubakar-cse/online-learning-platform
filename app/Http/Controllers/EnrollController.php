<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class EnrollController extends Controller
{
    private $course;
    private $student;
    private $enroll;

    public function index($id)
    {
//        $this->course = Course::find($id);
//        return view("website.enroll.enroll" , ["id" => $this->course]);
        return view("website.enroll.enroll" , ["id" => $id]);
    }

    public function createEnroll(Request $request,$id)
    {
        $request->validate([
            "name" => "required",
            "email" => "required | unique:students,email",
            "phone_no" => "required",

        ]);

        $this->student  = Student::newStudent($request);
        $this->enroll   = Enroll::newEnroll($request, $this->student->id, $id);

        Session::put("student_id",$this->student->id);
        Session::put("student_name",$this->student->name);

        return redirect("/course-registration-detail/" . $this->enroll->id);
    }
}
