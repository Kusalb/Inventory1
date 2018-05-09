<?php

namespace App\Http\Controllers;

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
        $user = User::create($request->all());
        return redirect ('user/show/'.$user->id);
    }
}
