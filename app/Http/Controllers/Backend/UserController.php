<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\UserRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        $roles = Role::all();
        return view('Backend.user.create', compact('roles'));
    }

    public function store(UserRequest $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        if ($user->save()) {
            return redirect('/user/create')->with('successMessage','User has been successfully created');
        } else {
            return back()->with('errorMessage','Unable to create new user into database. Contact admin');
        }
    }
}
