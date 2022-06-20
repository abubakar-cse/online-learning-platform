<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Session;

class Course extends Model
{
    use HasFactory;

    private static $course;
    private static $extension;
    private static $name;
    private static $imageName;
    private static $imgUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$extension    = $image->getClientOriginalExtension();
        self::$name         = Str::random("10");
        self::$imageName    = self::$name.".".self::$extension;

        self::$directory = "course-images/";
        $image->move(self::$directory, self::$imageName);

        self::$imgUrl = self::$directory.self::$imageName;

        return self::$imgUrl;
    }

    public static function newCourse($request)
    {
        self::$course = new Course();
        self::$course->teacher_id = Session::get("teacher_id");
        self::$course->title = $request->title;
        self::$course->start_date = $request->start_date;
        self::$course->start_timestamp = strtotime($request->start_date);
        self::$course->end_date = $request->end_date;
        self::$course->end_timestamp = strtotime($request->end_date);
        self::$course->fee = $request->fee;
        self::$course->short_description = $request->short_description;
        self::$course->long_description = $request->long_description;
        self::$course->image = self::getImageUrl($request->file("image"));
        self::$course->save();
    }

    public static function updateCourse($request,$id)
    {
        self::$course = Course::find($id);

        if ($request->file("image")) //if user wants to update the image
        {
            if (file_exists(self::$course->image)) //then it checks that the file exists or not
            {
                unlink(self::$course->image);
            }
            self::$imgUrl = self::getImageUrl($request->file("image"));
        }
        else
        {
            self::$imgUrl = self::$course->image;
        }

        self::$course->teacher_id = Session::get("teacher_id");
        self::$course->title = $request->title;
        self::$course->start_date = $request->start_date;
        self::$course->start_timestamp = strtotime($request->start_date);
        self::$course->end_date = $request->end_date;
        self::$course->end_timestamp = strtotime($request->end_date);
        self::$course->fee = $request->fee;
        self::$course->short_description = $request->short_description;
        self::$course->long_description = $request->long_description;
        self::$course->image = self::$imgUrl;
        self::$course->save();
    }

    public static function deleteCourse($id)
    {
        self::$course = User::find($id);

        if (file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }

        self::$course->delete();
    }
}
