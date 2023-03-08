<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function userCreate(Request $request){
        User::createUser($request);
        return back()->with('message','Registration Successful');
    }


}
