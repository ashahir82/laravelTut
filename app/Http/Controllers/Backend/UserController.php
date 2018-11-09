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

    public function index() {
        $users = User::all();
        return view('Backend.user.index',compact('users'));
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return view('Backend.user.show',compact('user'));
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('Backend.user.edit',compact('user', 'roles'));
    }

    public function update($id, Request $request) {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->ic_number = $request->input('ic_number');
        $user->phone_number = $request->input('phone_number');

        if ($user->save()) {
            return redirect('/user')->with('successMessage','User has been successfully updated');
        } else {
            return back()->with('errorMessage','Unable to update user into database. Contact admin');
        }
    }

    public function destroy($id) {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return redirect('/user')->with('successMessage','User has been successfully deleted');
        } else {
            return back()->with('errorMessage','Unable to delete user into database. Contact admin');
        }
    }
}
