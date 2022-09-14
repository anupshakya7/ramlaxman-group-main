<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('frontend.admin.login');
    }

    public function login(Request $req)
    {
        $adminUser = User::where(['email' => $req->email])->first();
        // dd($adminUser, $req->all());
        if (!$adminUser || !Hash::check($req->password, $adminUser->password)) {
            return "Username or Password is not matched";
        } else {
            $req->session()->put('admin', $adminUser);
            return redirect('/adminPage');
        }
    }

    public function header()
    {
        $header = Header::first();
        return view('frontend.admin.updateHeader', compact('header'));
    }

    public function update_header($id, Request $req)
    {
        // $raw = $req->all();
        // $raw['sub-title'] = $req->title . '-sub';
        $header = Header::find($id);
        $header->title = $req->title;
        $header->description = $req->description;
        $header->url = $req->url;
        $header->save();
        $req->session()->put('status', 'Restaurant updated successfully');
        return redirect('adminPage');

        // if ($header == 1) {
        //     # Updated
        //     return "Successful";
        // } else {
        //     # Not updated
        //     return "Unsuccessful";
        // }

        // return 1;

    }
}
