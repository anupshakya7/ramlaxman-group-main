<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Header;

class HomeController extends Controller
{
    public function index()
    {
        $data = Header::all();
        return view('frontend.main.index', ["header" => $data]);
    }

}
