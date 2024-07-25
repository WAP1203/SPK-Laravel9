<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    public function index() {
        return view('user-list', [
            'users' => User::all()
        ]);
    }

    public function add() {
        return view('user-add');
    }

    public function store(Request $request) {
        $email      = $request->input('email');
        $name       = $request->input('name');
        $password   = $request->input('password');
        $rePassword = $request->input('re_password');
        // TODO: Compare $password and $rePassword

        $user           = new User;
        $user->email    = $email;
        $user->name     = $name;
        $user->password = $password; // Don't forget to encryp!s
        $user->save();

        return redirect('user');
    }

    public function edit($id) {
        $user = User::where('id', $id)->first();

        return view('user-edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id) {
        $email      = $request->input('email');
        $name       = $request->input('name');
        
        $user = User::where('id', $id)->first();
        $user->email = $email;
        $user->name = $name;
        $user->save();

        return redirect('user');
    }

    public function delete($id) {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('user');
    }
}
