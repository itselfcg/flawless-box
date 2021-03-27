<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('payment_methods')->insert([
            'description' => 'Credit card'
        ]);
        \DB::table('payment_methods')->insert([
            'description' => 'Debit card'
        ]);
        \DB::table('payment_methods')->insert([
            'description' => 'Paypal'
        ]);
    }
}
