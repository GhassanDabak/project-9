<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function add()
    {
        $user = User::all();
        return view('admin.users.create', compact('user'));
    }

    public function insert(Request $request)
    {

        $user = new User();
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect('/users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->update();
        return redirect('/users');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }

    public function indexReact(){
        $users = User::all();
        return response($users, 200);
    }

    public function addReact()
    {
        $user = User::all();
        return view('admin.users.create', compact('user'));
    }

    public function insertReact(Request $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect('/users');
    }

    public function editReact($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function updateReact(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->update();
        return redirect('/users');
    }

    public function destroyReact($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
