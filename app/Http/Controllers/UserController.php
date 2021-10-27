<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //import this model
use Illuminate\support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $req){
        // return $req->input();  //Just to check the form and controller
        // return User::where(['email'=>$req->email])->first(); //to check data coming from DB
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or password do not match";
        }else{
            $req->session()->put('user', $user); //put a session data on $user with user key
            return redirect('/');
        }
    }

    public function register(Request $req){
        // return $req->input();
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect('/login');
    }
}
