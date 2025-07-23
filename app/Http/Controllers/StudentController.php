<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // public function students()
    // {
    //     $students = Student::all();
    //     return view('students', ['data' => $students]);
    // }

    // public function querry()
    // {
    //     $data = DB::table('students')->insert([
    //         'name' => 'maryam',
    //         'email' => 'maryam@.com',
    //         'city' => 'sawabi',
    //         'contact' => '5672637367',
    //     ]);
    //     if ($data) {
    //         return 'insert successfully';
    //     } else {
    //         return 'data not inserted';
    //     }
    // }

    // public function getStudent()
    // {
    //     $data = DB::table('students')
    //         ->where('name', 'rafeeq')
    //         ->get();
    //     echo "<pre>";
    //     print_r($data);
    // }
    public function upDate()
    {
        // $data = DB::table('students')->where('name', 'rafeeq')
        //     ->update(['name' => 'jani']);
        // if ($data) {
        //     return "updated";
        // } else {
        //     return "not updated";
        // }


        $data = DB::table('students')->where('name', 'jani')
            ->delete();
        if ($data) {
            return "deleted";
        } else {
            return "not deleted";
        }
    }
}
