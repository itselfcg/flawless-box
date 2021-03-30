<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $plans = SubscriptionPlan::all();
        $products = Product::all();

        return view('subscription', compact('plans'), compact('products'));
    }



}
