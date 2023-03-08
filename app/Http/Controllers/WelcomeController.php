<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

}
