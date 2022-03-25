<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
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
        $user->name = $request->input('name');
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

    public function register(Request $request)
    {
        $email = $request['email'];
        $user = User::where('email','=', $email)->get();
        if (count($user) > 0) {
            return response()->json([
                "status" => "400",
                "message" => "Email already registered!",
                "success" => "no"
            ]);
        } else {
            $newUser = new User();
            $newUser->email = $request['email'];
            $newUser->password = $request['password'];
            $newUser->save();
            return response()->json([
                "status" => "201",
                "message" => "Account created successfully",
                "success" => "yes",
                "user" => $newUser
            ]);
        }
    }

    public function login(Request $request)
    {
        $email = $request['email'];
        $password =$request['password'];
        $loggedUser = User::where([['email','=',$email],['password','=',$password]])->first();
        if($loggedUser){
            return response()->json([
                "loggedUser"=> $loggedUser,
                "success" => "yes",
            ]);
        }else{
            return response()->json([
                "message"=>"Wrong credentials"
            ]);
        }
    }

    // public function indexReact(){
    //     $users = User::all();
    //     return response($users, 200);
    // }

    // public function addReact()
    // {
    //     $user = User::all();
    //     return view('admin.users.create', compact('user'));
    // }

    // public function insertReact(Request $request)
    // {

    //     $user = new User();
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->password = $request->input('password');
    //     $user->save();

    //     return redirect('/users');
    // }

    // public function editReact($id)
    // {
    //     $user = User::find($id);
    //     return view('admin.users.edit', compact('user'));
    // }

    // public function updateReact(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->password = $request->input('password');
    //     $user->update();
    //     return redirect('/users');
    // }

    // public function destroyReact($id)
    // {
    //     $user = User::find($id);
    //     $user->delete();
    //     return redirect('/users');
    // }
}
