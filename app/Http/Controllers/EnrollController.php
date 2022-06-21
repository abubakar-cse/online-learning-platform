<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    private $course;

    public function index($id)
    {
        return view("website.enroll.enroll" , ["id" => $id]);
    }

    public function createEnroll(Request $request,$id)
    {

    }
}
