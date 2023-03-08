<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public  $users;


    public function userLogin(Request $request){
        $this->users=User::getALlUser();
        foreach ($this->users as $user){
                if($request->email==$user['email'] && $request->password==$user['password']) {
                    Session::put('user_id',$user['id']);
                    Session::put('user_name',$user['last_name']);
                return redirect('/');

            }
        }
        return back()->with('message','Invalid email or password');
    }

    public function logout(){
        Session::forget('user_id');
        Session::forget('user_name');

        return redirect('/login');
    }

}
