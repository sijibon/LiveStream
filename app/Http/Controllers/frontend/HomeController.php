<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }


}
