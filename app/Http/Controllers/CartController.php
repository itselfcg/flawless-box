<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Address;
use App\Models\BoxStatus;
use App\Models\Cupon;
use App\Models\Payment;
use App\Models\PaymentMethods;
use App\Models\PurchaseHistory;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\SubscriptionStatus;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        $paymentMethods = PaymentMethods::all();
        $address = $this->loadAddress();
        return view('cart')
            ->with("paymentMethods", $paymentMethods)
            ->with("address", $address);
    }


    public function payment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'nameAddress' => 'required',
            'lastNameForAddress' => 'required',
            'street' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phoneNumber' => 'required',
            'city' => 'required',
            'cardNumber' => 'required_if:paymentMethod,1',
            'cvcCode' => 'required_if:paymentMethod,1'
        ]);


        $cart = session('cart');
        $addressController = new AddressController();
        $paymentController = new PaymentController();
        $subscriptionController = new SubscriptionController();
        $account = new Account();
        $user = new User();


        $user->name = $request->name;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $address = $addressController->store($request);
        $payment = $paymentController->store($request);

        $account->user_id = $user->id;
        $account->address_id = $address->id;
        $account->save();

        $plan = SubscriptionPlan::find($cart['id']);
        $subscriptionController->create($account, $payment->id, $plan);

        session()->remove('cart');
        session()->remove('cupons');


        return redirect()->route('profile');
    }


    public function changeSubscription(Request $request, $id)
    {

        $request->validate([
            'nameAddress' => 'required',
            'lastNameForAddress' => 'required',
            'street' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phoneNumber' => 'required',
            'city' => 'required',
            'cardNumber' => 'required_if:paymentMethod,1',
            'cvcCode' => 'required_if:paymentMethod,1'
        ]);


        $account = Account::where('user_id', Auth::id())->get()->first();
        $subcription = Subscription::where('status', SubscriptionStatus::AUTO_RENEWAL)
            ->where('account_id', $account->id)->get()->first();
        if ($subcription != null) {
            $subcription->status = SubscriptionStatus::VALID;
            $subcription->save();
        }

        $subscriptionController = new SubscriptionController();
        $addressController = new AddressController();
        $paymentController = new PaymentController();

        $plan = SubscriptionPlan::find($id);
        $address = $addressController->update($request, $account->address_id);
        $payment = $paymentController->store($request);

        $subscriptionController->create($account, $payment->id, $plan);

        session()->remove('cart');
        session()->remove('cupons');

        return redirect()->route('subscription');

    }


    public function addToCart($id)
    {
        $plan = SubscriptionPlan::find($id);
        if (!$plan) {
            abort(404);
        }
        $cart = [
            "id" => $plan->id,
            "name" => $plan->name,
            "quantity" => 1,
            "price" => $plan->monthly_price,
            "photo" => $plan->photo,
            "duration" => $plan->duration,
            "shipping" => $plan->shipping

        ];

        session()->put('cart', $cart);
        return Redirect::route('cart');
    }

    public function loadAddress()
    {
        $address = new Address();
        if (Auth::check()) {
            $address = Account::where('user_id', Auth::id())
                ->with(['address'])->get()->first()->address;
        }
        return $address;
    }

    public function applyCupon(Request $request)
    {
        $code = $request->code;
        $cupon = Cupon::where('code', $code)->first();
        if ($cupon) {
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
        } else {
            return Redirect()->back()->with(['message' => 'Cupon code not valid.']);
        }
        return Redirect::back()->with('success', 'Cupon applied successfully!');
    }

    public function deleteCupon($code)
    {
        $cupons = session()->get('cupons');

        if (isset($cupons[$code])) {
            unset($cupons[$code]);
        }

        session()->put('cupons', $cupons);
        return Redirect::back()->with('success', 'Cupon deleted successfully!');

    }


}
