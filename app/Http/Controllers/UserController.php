<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id')->get();
        return inertia('User/Index',[
            'users' =>$users
        ]);
    }

    public function create(){
        return inertia('User/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/users')->with('message', 'User successfully created');
    }

    public function edit(User $users){

        return inertia('User/Edit', ['users' => $users]);
    }

    public function update(Request $request, User $users){
        $fields = $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'password' 
        ]);

        $users->update($fields);
        return redirect('/users')->with('message', "You successfully updated the user");
    }

    public function destroy(User $users) {
        $users->delete();

        return back();
    }

    public function show(User $users){
        return inertia('User/Show',[
            'users' =>$users
        ]);
    }
}
