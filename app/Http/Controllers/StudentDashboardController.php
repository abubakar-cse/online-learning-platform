<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Session;

class StudentDashboardController extends Controller
{
    private $enrolledCourses;

    public function index()
    {
        return view("student.home.home");
    }

    public function course()
    {
        $this->enrolledCourses = Enroll::where("student_id" , Session::get("student_id"))->orderBy("id" , "desc")->get();
        return view("student.course.course", ["enrolledCourses" => $this->enrolledCourses]);
    }
}
