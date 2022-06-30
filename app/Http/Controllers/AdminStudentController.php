<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    private $students;
    private $message;

    public function manageStudent()
    {
        $this->students = Student::orderBy("id" , "desc")->get();
        return view("admin.student.manage", ["students" => $this->students]);
    }

    public function updateStatus($id)
    {
        $this->message = Student::updateStatus($id);
        return redirect()->back()->with("message" , $this->message);
    }
}
