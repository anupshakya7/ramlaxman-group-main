<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Header;
use App\Models\OurCustomer;
use App\Models\OurTeam;
use App\Models\WorkingBenefit;

class HomeController extends Controller
{
    public function index()
    {
        $header = Header::first();
        $about = AboutUs::first();
        $benefit_title = WorkingBenefit::first();
        $benefit = WorkingBenefit::whereNot('id', 1)->get();
        $ourTeam = OurTeam::all();
        $ourCustomer = OurCustomer::all();
        return view('frontend.main.index', compact('header', 'about', 'benefit', 'benefit_title','ourTeam', 'ourCustomer'));
    }

}
