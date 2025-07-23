<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return ["result" => "your email 0r password is incorrect", "success" => false];
        }
        $success["token"] = $user->createToken('Myapp')->plainTextToken;
        $success["name"] = $user->name;
        return ["result" => $success, "msg" => "User login successfully"];
    }

    public function signup(Request $request)
    {
        $input = $request->all();
        $input["password"] = bcrypt($input["password"]);
        $user = User::create($input);
        $success["token"] = $user->createToken('Myapp')->plainTextToken;
        $success["name"] = $user->name;
        return ["result" => $success, "msg" => "User register successfully"];
    }
}
