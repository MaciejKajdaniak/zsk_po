<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function ShowUser(Request $req){
        //return $req->input();
        //return $req->input('firstName');
        //return $req->all();
        //return $req->method();
        //return $req->url();
        //return $req->path();

        $req->validate([
            'firstName' => 'required | min:3 | max:10',
            'lastName' => 'required | min:3 | max:20',
            'mail' => 'required | min:3 | max:10 | email',
        ]);
        
        $data =[
            'firstName' => $req->input('firstName'),
            'lastName' => $req->input('lastName'),
            'mail' => $req->input('mail'),
        ];

        return view('user', $data);
    }
}
