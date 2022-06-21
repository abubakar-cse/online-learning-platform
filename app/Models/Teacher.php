<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Teacher extends Model
{
    use HasFactory;

    private static $teacher;
    private static $extension;
    private static $name;
    private static $imageName;
    private static $imgUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$extension    = $image->getClientOriginalExtension();
//        self::$name         = rand(100000, 2000000);
        self::$name         = Str::random("10");
        self::$imageName    = self::$name.".".self::$extension;

        self::$directory = "teacher-images/";
        $image->move(self::$directory, self::$imageName);

        self::$imgUrl = self::$directory.self::$imageName;

        return self::$imgUrl;
    }

    public static function newTeacher($request)
    {
        self::$teacher              = new Teacher();
        self::$teacher->name        = $request->name;
        self::$teacher->designation = $request->designation;
        self::$teacher->email       = $request->email;
        self::$teacher->password    = bcrypt($request->password);
        self::$teacher->phone_no    = $request->phone_no;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::getImageUrl($request->file("image"));
        self::$teacher->save();
    }

    public static function updateTeacher($request,$id)
    {
        self::$teacher = Teacher::find($id);

        if ($request->file("image")) //if user wants to update the image
        {
            if (file_exists(self::$teacher->image)) //then it checks that the file exists or not
            {
                unlink(self::$teacher->image);
            }
            self::$imgUrl = self::getImageUrl($request->file("image"));
        }
        else
        {
            self::$imgUrl = self::$teacher->image;
        }

        self::$teacher->name        = $request->name;
        self::$teacher->designation = $request->designation;
        self::$teacher->email       = $request->email;
        self::$teacher->password    = bcrypt($request->password);
        self::$teacher->phone_no    = $request->phone_no;
        self::$teacher->address     = $request->address;
        self::$teacher->image       = self::$imgUrl;
        self::$teacher->save();
    }

    public static function deleteTeacher($id)
    {
        self::$teacher = Teacher::find($id);

        if (file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }

        self::$teacher->delete();
    }
}
