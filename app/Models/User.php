<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

//    User Model Starts Here

    private static $user;
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

        self::$directory = "user-images/";
        $image->move(self::$directory, self::$imageName);

        self::$imgUrl = self::$directory.self::$imageName;

        return self::$imgUrl;
    }

    public static function newUser($request)
    {
        self::$user = new User();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->image = self::getImageUrl($request->file("image"));
        self::$user->save();
    }

    public static function updateUser($request,$id)
    {
        self::$user = User::find($id);

        if ($request->file("image")) //if user wants to update the image
        {
            if (file_exists(self::$user->image)) //then it checks that the file exists or not
            {
                unlink(self::$user->image);
            }
            self::$imgUrl = self::getImageUrl($request->file("image"));
        }
        else
        {
            self::$imgUrl = self::$user->image;
        }

        self::$user->name        = $request->name;
        self::$user->email       = $request->email;
        self::$user->password    = bcrypt($request->password);
        self::$user->image       = self::$imgUrl;
        self::$user->save();
    }

    public static function deleteUser($id)
    {
        self::$user = User::find($id);

        if (file_exists(self::$user->image))
        {
            unlink(self::$user->image);
        }

        self::$user->delete();
    }

}
