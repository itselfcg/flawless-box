<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();
        $products = Product::all();

        return view('subscription', compact('subscriptions'),compact('products'));
    }
}
