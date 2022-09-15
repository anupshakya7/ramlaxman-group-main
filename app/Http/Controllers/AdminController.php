<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Header;
use App\Models\User;
use App\Models\WorkingBenefit;
use Illuminate\Contracts\Session\Session;
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
        $req->session()->put('status', 'Header updated successfully');
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

    public function aboutUs()
    {
        $about = AboutUs::first();
        return view('frontend.admin.updateAbout', compact('about'));
    }

    public function update_about($id, Request $req)
    {
        $about = AboutUs::find($id);
        $about->title = $req->title;
        $about->description = $req->description;
        $about->satisfied_clients = $req->satisfied_clients;
        $about->successful_projects = $req->successful_projects;
        $about->years_of_experience = $req->years_of_experience;
        $about->present_experts = $req->present_experts;
        $about->image = $req->image;
        $about->save();
        $req->session()->put('status', "About Us updated successfully");
        return redirect('adminPage');
    }

    public function working_benefit()
    {
        $benefit = WorkingBenefit::all();
        return view('frontend.admin.working_benefits', compact('benefit'));
    }

    public function working_benefit_store(Request $req)
    {
        $addBenefit = new WorkingBenefit;
        $addBenefit->title = $req->title;
        $addBenefit->description = $req->description;
        $addBenefit->icon = "<i class='" . $req->icon . " text-white'></i>";
        $addBenefit->background_color = "btn-icon rounded-pill mr-4 " . $req->background_color;
        $addBenefit->save();
        $req->session()->put('status', "Working Benefits Added Successfully");
        return redirect('working_benefit');
    }

    public function delete_benefits($id)
    {
        $deleteBenefit = WorkingBenefit::find($id);
        $deleteBenefit->delete();
        session()->flash('status', "Working Benefits Deleted Successfully");
        return redirect('working_benefit');
    }
}
