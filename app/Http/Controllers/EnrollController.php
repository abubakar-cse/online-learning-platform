<?php

namespace App\Http\Controllers;

use App\Mail\EnrollConfirmationMail;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class EnrollController extends Controller
{
    private $course;
    private $student;
    private $enroll;
    private $data = [];

    public function index($id)
    {
        if (Session::get("student_id"))
        {
            $this->student = Student::find(Session::get("student_id"));
            $this->data = [
                "name"      => $this->student->name,
                "email"     => $this->student->email,
                "phone_no"  => $this->student->phone_no,
            ];
        }
//        $this->course = Course::find($id);
//        return view("website.enroll.enroll" , ["id" => $this->course]);
        return view("website.enroll.enroll" , ["id" => $id, "data" => $this->data]);
    }

    public function createEnroll(Request $request,$id)
    {
        if (Session::get("student_id"))
        {
            $this->student  = Student::find(Session::get("student_id"));
        }
        else
        {
            $request->validate([
                "name" => "required",
                "email" => "required | unique:students,email",
                "phone_no" => "required",

            ]);

            $this->student  = Student::newStudent($request);

            Session::put("student_id",  $this->student->id);
            Session::put("student_name",$this->student->name);
        }

        $this->enroll   = Enroll::newEnroll($request, $this->student->id, $id);

        Mail::to($this->student->email)->send(new EnrollConfirmationMail([
            "name" => $this->student->name,
            "email" => $this->student->email,
            "pssword" => $this->student->phone_no,
        ]));

        return redirect("/course-registration-detail/" . $this->enroll->id);
    }
}
