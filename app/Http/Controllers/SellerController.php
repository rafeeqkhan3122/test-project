<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Seller;
use App\Models\Product;
use App\Models\Student;
use App\Models\User1;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class SellerController extends Controller
{
    //
    public function list()
    {
        return Seller::find(1)->productData;
    }

    public function manyRel()
    {
        return Seller::find(1)->productManyData;
    }


    function manyToOne()
    {
        // $data = Product::find(2)->with('seller')->get();
        // return $data;

        // <-----Get the seller of a product------->
        // $product = Product::find(4);
        // echo $product->seller->name;
        // <------------get products of one seller----------->
        $seller = Seller::find(1);
        foreach ($seller->productManyData as $product) {
            echo "<pre>";
            echo $product->name;
        }
    }


    public function sellerList()
    {
        return Seller::all();
    }


    public function addStudent(Request $request)
    {
        $rules = array(
            "name" => 'required|min:3|max:15',
            "email" => 'required|email|unique:students',
            "city" => "required|min:3|max:20",
            "contact" => "required|min:11"
        );
        $validation =  FacadesValidator::make($request->all(), $rules);
        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->city = $request->city;
            $student->contact = $request->contact;
            $student->save();
            return ["result" => "Add student successfully"];
        }
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        if ($student) {
            $rules = array(
                "name" => 'required|min:3|max:15',
                "email" => 'required|email|unique:students',
                "city" => "required|min:3|max:20",
                "contact" => "required|min:11"
            );
            // we must register Validator class in the top of the controller
            $validation =  FacadesValidator::make($request->all(), $rules);
            if ($validation->fails()) {
                return $validation->errors();
            } else {
                $student->name = $request->name;
                $student->email = $request->email;
                $student->city = $request->city;
                $student->contact = $request->contact;
                $student->save();
                return ["result" => "student updated successfully"];
            }
        } else {
            return ["result" => "Student not found"];
        }
    }

    public function deleteStudent($id)
    {
        $student = Student::destroy($id);
        if ($student) {
            return response()->json(['result' => 'seller deleted']);
        } else {
            return response()->json(['result' => 'seller not found'], 404);
        }
    }

    public function searchStudent($name)
    {
        $student = Student::where('name', 'like', "%$name%")->get();
        if ($student) {
            return ["result" => $student];
        } else {
            return ["result" => "Student not found"];
        }
    }

    public function postList()
    {
        return Post::all();
    }
}
