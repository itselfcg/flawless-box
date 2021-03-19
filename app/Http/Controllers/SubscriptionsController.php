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

        return view('subscription', compact('subscriptions'), compact('products'));
    }


    public function addToCart($id)
    {
        $subscription = Subscription::find($id);
        if (!$subscription) {
            abort(404);
        }
        $cart = session()->get('cart');

        $cart = [

                "name" => $subscription->name,
                "quantity" => 1,
                "price" => $subscription->monthly_price,
                "photo" => $subscription->photo,
                "duration" => $subscription->duration,
                "shipping" => $subscription->shipping

        ];
        session()->put('cart', $cart);
        return redirect('cart')->with('success', 'Product added to cart successfully!');
    }


}
