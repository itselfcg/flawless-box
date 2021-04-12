<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\BoxStatus;
use App\Models\Payment;
use App\Models\PaymentMethods;
use App\Models\SubscriptionPlan;
use App\Models\SubscriptionStatus;
use App\Models\User;
use App\Models\Address;
use App\Models\PurchaseHistory;
use App\Models\Subscription;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');


    }


    public function showSubscription()
    {
        $userId = Auth::id();
        $account = Account::where('user_id', $userId)->get()->first();
        $subscriptions = Subscription::where('account_id', $account->id)
            ->whereNotIn('status', [SubscriptionStatus::AUTO_RENEWAL])
            ->with(['plan', 'account', 'payment'])->orderBy('id', 'desc')
            ->get();
        $activeSubscription = Subscription::where('account_id', $account->id)
            ->where('status', SubscriptionStatus::AUTO_RENEWAL)
            ->with(['plan', 'account', 'payment'])->orderBy('id', 'desc')
            ->get()->first();
        $autoRenewal = Subscription::where('account_id', $account->id)->where('status', SubscriptionStatus::AUTO_RENEWAL)->get()->first();
        $activeFlag = $autoRenewal != null;
        return view('/home-subviews/subscription')
            ->with('subscriptions', $subscriptions)
            ->with('activeFlag', $activeFlag)
            ->with('activeSubscription', $activeSubscription);
    }

    public function showSubscriptionPlanUpgrade($id)
    {
        $plans = SubscriptionPlan::whereNotIn("id", [$id])->get();
        $paymentMethods = PaymentMethods::all();
        return view('/home-subviews/subscription-edit')->with('plans', $plans)->with("paymentMethods", $paymentMethods);
    }


    public function showPurchases()
    {
        $userId = Auth::id();
        $account = Account::where('user_id', $userId)->get()->first();
        $purchases = PurchaseHistory::where('account_id', $account->id)->orderBy('id', 'asc')
            ->get();
        return view('/home-subviews/purchase-history')->with('purchases', $purchases);
    }

    public function cancelSubscription($id)
    {
        $subcription = Subscription::find($id);

        $purchases = PurchaseHistory::where('subscription_id', $subcription->id)
            ->where('status', BoxStatus::WAITING)->get();
        if ($purchases == null) {
            $subcription->status = SubscriptionStatus::CANCELED;
        } else {
            $subcription->status = SubscriptionStatus::VALID;

        }

        $subcription->update();
        return redirect()->route('subscription');
    }


    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email'
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile');
    }

    public
    function updateAddress(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'street' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'phoneNumber' => 'required',
            'city' => 'required'
        ]);

        $account = Account::where('user_id', $id)->get()->first();
        $address = new Address();
        $address->name = $request->name;
        $address->last_name = $request->lastName;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->street = $request->street;
        $address->zip_code = $request->zipcode;
        $address->phone_number = $request->phoneNumber;
        $address->save();
        $account->address_id = $address->id;
        $account->save();
        return redirect()->route('address');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'confirmed:password_confirmation', 'min:6', 'different:old_password'],
            'old_password' => ['required', 'password']
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('profile')->withInput();;


    }


}
