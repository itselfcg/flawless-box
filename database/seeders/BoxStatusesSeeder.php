<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BoxStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('box_statuses')->insert([
            'description' => 'Waiting to be shipped'
        ]);
        \DB::table('box_statuses')->insert([
            'description' => 'Sent to:'
        ]);
        \DB::table('box_statuses')->insert([
            'description' => 'Preparing box'
        ]);
    }
}
