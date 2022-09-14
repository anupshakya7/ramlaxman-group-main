<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ServicesDetailController extends Controller
{
    public function index()
    {
        return view('frontend.main.details');
    }
}
