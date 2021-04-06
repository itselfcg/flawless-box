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


    public function create($account,$payment_id,$plan)
    {
        $subcription = new Subscription();
        $subcription->plan_id = $plan->id;
        $subcription->account_id = $account->id;
        $subcription->status = SubscriptionStatus::AUTO_RENEWAL;
        $subcription->payment_id = $payment_id;
        $subcription->starts_at = new DateTime(date("Y-m-d H:i:s"));
        $dateController = new DateController();
        $subcription->expires_at = $dateController->calculateDate($plan->duration, new DateTime(date("Y-m-d H:i:s")));
        $subcription->billing_date = $dateController->calculateDate($plan->duration, new DateTime(date("Y-m-d H:i:s")));
        $subcription->save();

        $monthNum = date("m");;
        $shippingDate = new DateTime(date("Y-m-d H:i:s"));
        $shippingDate->modify('+5 days');

        for ($i = 1; $i <= $plan->duration; $i++) {
            $purchases = new PurchaseController();
            $purchases->create($subcription,$account->address_id,$shippingDate,$monthNum);
            $shippingDate->modify('+1 month');
            $monthNum = $shippingDate->format('m');
        }

        return $subcription;
    }

}
