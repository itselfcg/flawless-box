<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('accounts')->insert([
            'user_id' => 1,
            'address_id' => 1,
            'referral_code' => '10001'
        ]);
    }
}
