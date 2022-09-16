<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Header;
use App\Models\OurTeam;
use App\Models\WorkingBenefit;

class HomeController extends Controller
{
    public function index()
    {
        $header = Header::first();
        $about = AboutUs::first();
        $benefit = WorkingBenefit::all();
        $ourTeam = OurTeam::all();
        return view('frontend.main.index', compact('header', 'about', 'benefit', 'ourTeam'));
    }

}
