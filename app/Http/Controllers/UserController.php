<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->paginate(7);
        return view('manage.manageUser')->with(compact('users'));
    }
    public function getUser($id){
        $users = User::find($id);
        return view('manage.updateUser')->with(compact('users'));
    }
    public function updateUser(Request $req){
        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->role = $req->role;
        try {
            $user->save();
            return back()->with('success', 'You updated infomation successfull');
        } catch (Exception $exception) {
            return back()->with('error', 'Phone number already exists');
        }
    }
    public function deleteUser($id){
        $user = User::find($id)->delete();
        return back()->with('success', 'You deleted this user successfull');
    }
}
