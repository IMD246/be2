<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){
        // return $req->input();
        $data = $req->input();
        $req->session()->put('user',$data['user']);

        return redirect('information');
    }
    //Login
   public function Login(Request $request){
        // return $req->input();
      
      
    }
}
