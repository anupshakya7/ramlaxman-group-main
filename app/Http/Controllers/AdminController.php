<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    public function index(){
        return view('frontend.login');
    }

    public function login(Request $req){
        $adminUser = Admin::where(['email'=>$req->email])->first(); 
        if(!$adminUser || !Hash::check($req->password, $user->password)){
            return "Username or Password is not matched";
        } else {
            $req->session()->put('admin',$adminUser);
            return redirect('/'); 
        }
    }

}
