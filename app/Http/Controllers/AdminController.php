<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Header;
use App\Models\OurCustomer;
use App\Models\OurTeam;
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

    public function update_benefit($id)
    {
        $benefitEdit = WorkingBenefit::find($id);
        return view('frontend.admin.updateWorkingBenefit', compact('benefitEdit'));
    }

    public function update_working_benefit($id, Request $req)
    {
        $benefitUpdate = WorkingBenefit::find($id);
        $benefitUpdate->title = $req->title;
        $benefitUpdate->description = $req->description;
        $benefitUpdate->icon = $req->icon;
        $benefitUpdate->background_color = $req->background_color;
        $benefitUpdate->save();
        $req->session()->put("status", "Working Benefits Updated Successfully");
        return redirect('working_benefit');
    }

    public function our_team()
    {
        $our_team = OurTeam::all();
        return view('frontend.admin.our_team', compact('our_team'));
    }

    public function our_team_store(Request $req)
    {
        $our_new_team = new OurTeam;
        $our_new_team->image = $req->image;
        $our_new_team->emp_name = $req->emp_name;
        $our_new_team->role = $req->role;
        $our_new_team->twitter = $req->twitter;
        $our_new_team->facebook = $req->facebook;
        $our_new_team->linkIn = $req->linkIn;
        $our_new_team->instagram = $req->instagram;
        $our_new_team->youtube = $req->youtube;
        $our_new_team->save();
        $req->session()->put('status', "Employee Added Successfully");
        return redirect('ourTeam');
    }

    public function delete_our_team($id)
    {
        $member_delete = OurTeam::find($id);
        $member_delete->delete();
        session()->flash('status', "Employee Deleted Successfully");
        return redirect('ourTeam');
    }

    public function update_our_team($id)
    {
        $member_update = OurTeam::find($id);
        return view('frontend.admin.updateOurTeam', compact('member_update'));
    }

    public function update_OurTeam($id, Request $req)
    {
        $memberEdit = OurTeam::find($id);
        $memberEdit->image = $req->image;
        $memberEdit->emp_name = $req->emp_name;
        $memberEdit->role = $req->role;
        $memberEdit->twitter = $req->twitter;
        $memberEdit->facebook = $req->facebook;
        $memberEdit->linkIn = $req->linkIn;
        $memberEdit->instagram = $req->instagram;
        $memberEdit->youtube = $req->youtube;
        $memberEdit->save();
        $req->session()->put("status", "Employee Updated Successfully");
        return redirect('ourTeam');
    }

    public function our_customer()
    {
        $ourCustomer = OurCustomer::all();
        return view('frontend.admin.ourCustomer', compact('ourCustomer'));
    }

    public function our_customer_store(Request $req)
    {
        $addMember = new OurCustomer;
        $addMember->profile = $req->profile;
        $addMember->customer_name = $req->customer_name;
        $addMember->project_name = $req->project_name;
        $addMember->save();
        $req->session()->put('status', "Customer Added Successfully");
        return redirect('ourCustomer');
    }
    public function delete_our_customer($id)
    {
        $deleteMember = OurCustomer::find($id);
        $deleteMember->delete();
        session()->put('status', 'Customer Delete Successfully');
        return redirect('ourCustomer');
    }

    public function update_our_customer($id)
    {
        $editCustomer = OurCustomer::find($id);
        return view('frontend.admin.updateOurCustomer', compact('editCustomer'));
    }

    public function update_OurCustomer($id, Request $req)
    {
        $updateCustomer = OurCustomer::find($id);
        $updateCustomer->profile = $req->profile;
        $updateCustomer->customer_name = $req->customer_name;
        $updateCustomer->project_name = $req->project_name;
        $updateCustomer->save();
        $req->session()->put('status', "Customer Updated Successfully");
        return redirect('ourCustomer');
    }

    public function our_service_store()
    {

    }
}
