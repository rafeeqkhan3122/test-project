<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // public function user()
    // {
    //     $array = ['asif', 'aslam', 'amir'];
    //     $user = 'rafeeq khan';
    //     return view('user', ['user' => $user, 'data' => $array]);
    public function user()
    {
        return view('user');
    }
    public function index()
    {
        return view('index');
    }
    public function adduser(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:15',
            'email' => 'required|email',
            'city' => 'required|min:3|max:15',


        ], [
            'name.required' => 'name field can not be empty',
            'email.email' => 'not valid email'
        ]);
        $request->session()->flash('message', 'user addaed successfully!');
        return redirect('user-form');
    }
    public function newuser(Request $req)
    {
        echo $req->city;
        echo "<br>";
        echo $req->gender;
        echo "<br>";
        echo $req->age;
        echo "<br>";
        "<pre>";
        print_r($req->skill);
    }
}
