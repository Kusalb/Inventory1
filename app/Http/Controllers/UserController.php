<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users= User::all();
        return view('user.index',compact('users'));
    }
    public function show($id)
    {
        return view('user.show', ['user'=>User::findOrFail($id)]);
    }

    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
//        dd($request->all());
        $user = new User();
        $input = $request->all();
//        dd($input);
        $user->username = $input['username'];
        $user->password = $input['password'];
        $user->email = $input['email'];
        $user->save();
        return redirect ('user/index');
    }
}
