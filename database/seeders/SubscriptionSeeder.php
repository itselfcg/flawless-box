<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subscriptions')->insert([
            'plan_id' => 2,
            'account_id' => 1,
            'status' =>'Valid',
            'payment_id' => 1,
            'starts_at' => '2021-03-22',
            'expires_at' => '2021-05-22',
            'billing_date'=>'2021-03-22'
        ]);

        \DB::table('subscriptions')->insert([
            'plan_id' => 1,
            'account_id' => 1,
            'status' =>'Auto renewal',
            'payment_id' => 2,
            'starts_at' => '2021-06-22',
            'expires_at' => '2021-06-22',
            'billing_date'=>'2021-06-22'
        ]);
    }
}
