<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //get user fn
    function getUser() {
        return view('user');
    }
    function aboutUser() {
        return "Hello this is Devika Devarajan";
    }
    function getUserName($name) {
        //return "Hello this is " . $name;
        return view('getuser', ["name" => $name]);
    }
    function adminLogin() {
        $name = "Devika";
        $array = array("Rushabh", "Devika", "Raj", "Rahul");
        return view('admin.login', ["name" => $name, "array" =>$array]);
    }
    function addUser(Request $request) {
        $request->validate(
            [
                'name' => 'required|string|max:255|min:3|uppercase',
                'email' => 'required|email',
                'password' => 'required',
                'skill'   => 'required|array',
                'skill.*' => 'in:PHP,JS,Python',
                
                'gender' => 'required|in:Male,Female,Other',
                'city' => 'required|in:Delhi,Mumbai,Bangalore,Chennai,Bhopal,Ahmedabad',
                // 'languages'   => 'required|array',
                // 'languages.*' => 'in:english,hindi,malayalam,gujarati,french',

                'age' => 'required',
                
            ],
            [
                'name.required' => 'Name is required',
                'name.min' => 'Name should be atleast 3 characters',
                'name.max' => 'Name should be atmost 255 characters',
                'name.uppercase' => 'Name should be in uppercase',
                'email.required' => 'Email is required',
                'email.email' => 'Email should be in email format',

                'skill.required' => 'Please select at least one skill.',
                'skill.*.in' => 'Invalid selection.',
                'gender.required' => 'Please select a gender.',
                'gender.in' => 'Invalid gender selection.',
                'city.required' => 'Please select a city.',
                'city.in' => 'Invalid city selection.',
                // 'languages.required' => 'Please select at least one language.',
                // 'languages.*.in' => 'Invalid language selection.',

            ]
        );
        //return $req;
        echo 'Name: ' . $request->name . '<br>Email: ' . $request->email . '<br>Password: '.$request->password . '<br>Gender: '.$request->gender . '<br>City: '.$request->city . '<br>Age: '.$request->age;
        echo '<br>Skills: '; 
        print_r($request->skill);
        //return $req->input();
        // $req->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);
        // return $req->input();
    }  
}
