<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20|confirmed'

        ]);
        $user = User::create(['name'=>$request->name,'email'=>$request->email,'password'=>bcrypt($request->password)]);
        session()->flash('success','欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show',[$user]);
    }
    
}
