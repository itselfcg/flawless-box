<?php

namespace App\Http\Controllers;

use App\Models\Cupon;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
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

    public function applyCupon(Request $request)
    {
        $code = $request->code;
        $cupon = Cupon::where('code', $code)->first();
        if ($cupon){
            $cupons = session()->get('cupons');

            if (!$cupons) {
                $cupons = [
                    $code => [
                        "code" => $cupon->code,
                        "discount" => $cupon->discount,
                    ]
                ];
            } else {
                if (!isset($cupons[$code])) {
                    $cupons[$code] = [
                        "code" => $cupon->code,
                        "discount" => $cupon->discount,
                    ];
                }
            }
            session()->put('cupons', $cupons);
        }else{
            Log::alert("dfdsfdsf");
            return Redirect()->back()->with(['message' => 'Cupon code not valid.']);
        }
        return Redirect::back()->with('success', 'Cupon applied successfully!');
    }

    public function  deleteCupon($code){
        $cupons = session()->get('cupons');

        if (isset($cupons[$code])) {
            unset($cupons[$code]);
        }

        session()->put('cupons', $cupons);
        return Redirect::back()->with('success', 'Cupon deleted successfully!');

    }
}
