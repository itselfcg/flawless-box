<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('/home-subviews/profile');
    }

    public function subscription()
    {
        return view('/home-subviews/subscription');
    }
    public function address()
    {
        return view('/home-subviews/address');
    }
    public function purchases()
    {
        return view('/home-subviews/purchase-history');
    }
}
