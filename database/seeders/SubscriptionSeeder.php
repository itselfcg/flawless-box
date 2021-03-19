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
            'name' => 'Montly',
            'description' => '$25 billed monthly',
            'photo' => 'images/pictures/carton-box.jpg',
            'duration'=>'1',
            'monthly_price' => 25,
            'shipping'=> 11.99

        ]);

        \DB::table('subscriptions')->insert([
            'name' => '3 Months',
            'description' => 'Prepay $70 for 3 months',
            'photo' => 'images/pictures/carton-box2.jpg',
            'duration'=>'3',
            'monthly_price' => 23.33,
            'shipping'=> 0.99

        ]);

        \DB::table('subscriptions')->insert([
            'name' => '6 Months',
            'description' => 'Prepay $138 for 6 months',
            'photo' => 'images/pictures/carton-box3.jpg',
            'duration'=>'6',
            'monthly_price' => 23,
            'shipping'=> 0.0


        ]);

    }
}
