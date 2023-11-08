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
        ],
        [
            //'firstName.required' => 'Wypełnij pole :attribute',
            //'firstName.min' => 'Wpisz conajmniej :min znaki do pola :attribute',
            //'firstName.max' => 'Możeswz wpisac maksymalnie :max znaków do pola :attribute',

            //'lastName.required' => 'Wypełnij pole :attribute',
            //'lastName.min' => 'Wpisz conajmniej :min znaki do pola :attribute',
            //'lastName.max' => 'Możeswz wpisac maksymalnie :max znaków do pola :attribute',

            //'mail.required' => 'Wypełnij pole :attribute',
            //'mail.min' => 'Wpisz conajmniej :min znaki do pola :attribute',
            //'mail.max' => 'Możeswz wpisac maksymalnie :max znaków do pola :attribute',
            //'mail.email' => 'Pole :attribute musi być typu email',
        ]);
        
        $data =[
            'firstName' => $req->input('firstName'),
            'lastName' => $req->input('lastName'),
            'mail' => $req->input('mail'),
        ];

        return view('user', $data);
    }
}
