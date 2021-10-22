<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

        public function contact(){
        return view('Contact');
    }
    public function validateContact(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:30',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'message'=>'required|min:5|max:150'
            ],
            [
                'name.required'=>'Name is needed',
                'name.min'=>'Name should be more than 5 charcters'
            ]
            );
        return "<h1>Your Contact Request</h1> <br>Name: ".$request->name."<br>Email: ".$request->email."<br>Phone: ".$request->phone."<br>Message: ".$request->message;      
    }
}
