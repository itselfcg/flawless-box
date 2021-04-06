<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('payments')->insert([
            'payment_method_id' => 1,
            'description' => 'Maybe some numbers?'
        ]);
        \DB::table('payments')->insert([
            'payment_method_id' => 1,
            'description' => 'Maybe some numbers?'
        ]);
    }
}
