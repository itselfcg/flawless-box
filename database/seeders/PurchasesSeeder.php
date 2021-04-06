<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('purchase_histories')->insert([
            'account_id' => 1,
            'subscription_id' => 1,
            'address_id' => 1,
            'status' => 'Waiting to be shipped',
            'description' => "March",
            'shipping_date' => '2021-03-25',
            'tracking_number' => ''
        ]);
        \DB::table('purchase_histories')->insert([
            'account_id' => 1,
            'subscription_id' => 1,
            'address_id' => 1,
            'status' => 'Waiting to be shipped',
            'description' => "April",
            'shipping_date' => '2021-04-1',
            'tracking_number' => ''
        ]);
        \DB::table('purchase_histories')->insert([
            'account_id' => 1,
            'subscription_id' => 1,
            'address_id' => 1,
            'status' => 'Waiting to be shipped',
            'description' => "May",
            'shipping_date' => '2021-05-1',
            'tracking_number' => ''
        ]);

        \DB::table('purchase_histories')->insert([
            'account_id' => 1,
            'subscription_id' => 2,
            'address_id' => 1,
            'status' => 'Waiting to be shipped',
            'description' => "June",
            'shipping_date' => '2021-06-1',
            'tracking_number' => ''
        ]);
    }
}
