<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users;
    private $user;

    public function add()
    {
        return view("admin.user.add");
    }

    public function create(Request $request)
    {
        User::newUser($request);
        return redirect("/add-user")->with("message", "User Account Created Successfully");
    }

    public function manage()
    {
        $this->user = User::all();
        return view("admin.user.manage", ["users" => $this->user]);
    }

    public function edit($id)
    {
        $this->user = User::find($id);
        return view("admin.user.edit", ["user" => $this->user]);
    }

    public function update(Request $request,$id)
    {
        User::updateUser($request,$id);
        return redirect("/manage-user")->with("message", "User Information is Updated");
    }

    public function delete($id)
    {
        User::deleteUser($id);
        return redirect("/manage-user")->with("message", "User Information is deleted");
    }

}
