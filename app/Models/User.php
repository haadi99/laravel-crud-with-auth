<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    private static $user;

    public static function createUser($request){
        self::$user = new User();
        self::$user->first_name = $request->first_name;
        self::$user->last_name = $request->last_name;
        self::$user->email = $request->email;
        self::$user->date_of_birth = $request->date_of_birth;
        self::$user->phone = $request->phone;
        self::$user->password = $request->password;
        self::$user->save();
    }

    public static function getALlUser(){
        return User::all();
    }

}
