<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subscription_statuses')->insert([
            'description' => 'Paid'
        ]);
        \DB::table('subscription_statuses')->insert([
            'description' => 'Auto renewal'
        ]);
        \DB::table('subscription_statuses')->insert([
            'description' => 'Cancel'
        ]);
        \DB::table('subscription_statuses')->insert([
            'description' => 'Valid'
        ]);
    }
}
