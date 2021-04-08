<?php

namespace App\Http\Controllers;

use App\Models\BoxStatus;
use App\Models\PurchaseHistory;
use App\Models\Subscription;
use App\Models\SubscriptionStatus;
use DateTime;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{


    public function create($account, $payment_id, $plan)
    {
        $today_date = new DateTime(date("Y-m-d H:i:s"));

        $purchase = PurchaseHistory::where('account_id', $account->id)->with('subscription')->orderBy('id', 'desc')
            ->get()->first();
        if ($purchase != null) {
            $start_date = new DateTime($purchase->shipping_date);
            $start_date->modify('+1 month');
        }else{
            $start_date = new DateTime(date("Y-m-d H:i:s"));

        }

        $subcription = new Subscription();
        $subcription->plan_id = $plan->id;
        $subcription->account_id = $account->id;
        $subcription->status = SubscriptionStatus::AUTO_RENEWAL;
        $subcription->payment_id = $payment_id;
        $subcription->starts_at = $start_date;
        $dateController = new DateController();
        $subcription->expires_at = $dateController->calculateDate($plan->duration,clone $start_date);
        $subcription->billing_date = $dateController->calculateDate($plan->duration,clone $today_date);
        $subcription->save();

        $monthNum = $start_date->format( 'm' );
        $shippingDate =clone $start_date;
        $shippingDate->modify('+5 days');

        for ($i = 1; $i <= $plan->duration; $i++) {
            $purchases = new PurchaseController();
            $purchases->create($subcription, $account->address_id,clone $shippingDate, $monthNum);
            $shippingDate->modify('+1 month');
            $monthNum = $shippingDate->format('m');
        }

        return $subcription;
    }

}
