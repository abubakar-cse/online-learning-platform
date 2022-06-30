<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\s;

class Student extends Model
{
    use HasFactory;

    private static $student;
    private static $message;

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name        = $request->name;
        self::$student->email       = $request->email;

        if ($request->password)
        {
            self::$student->password    = bcrypt($request->password);
        }
        else
        {
            self::$student->password    = bcrypt($request->phone_no);
        }

        self::$student->phone_no    = $request->phone_no;
        self::$student->save();

        return self::$student;
    }

    public static function updateStatus($id)
    {
        self::$student = Student::find($id);
        if (self::$student->status ==1)
        {
            self::$student->status = 0;
            self::$message = "Student de-activated Successfully";
        }
        else
        {
            self::$student->status = 1;
            self::$message = "Student Activated Successfully";
        }
        self::$student->save();
        return self::$message;
    }
}
