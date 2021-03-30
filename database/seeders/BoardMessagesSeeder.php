<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BoardMessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('board_messages')->insert([
            'message' => 'Checkout our guide for more info about products.'
        ]);
    }
}
