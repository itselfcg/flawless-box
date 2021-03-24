<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $plans = SubscriptionPlan::all();
        $products = Product::all();

        return view('subscription', compact('plans'), compact('products'));
    }


    public function addToCart($id)
    {
        $plan = SubscriptionPlan::find($id);
        if (!$plan) {
            abort(404);
        }
        $cart = [

            "name" => $plan->name,
            "quantity" => 1,
            "price" => $plan->monthly_price,
            "photo" => $plan->photo,
            "duration" => $plan->duration,
            "shipping" => $plan->shipping

        ];
        session()->put('cart', $cart);
        return redirect('cart')->with('success', 'Product added to cart successfully!');
    }

}
