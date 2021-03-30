<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CuponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cupons')->insert([
            'code' => 'FREE12SHIP',
            'description' => 'Free shipping in your anual subscription. CODE:FREE12SHIP',
            'discount' => '1.99'

        ]);
        \DB::table('cupons')->insert([
            'code' => 'DEVCODE',
            'description' => 'Free shipping in your anual subscription. CODE:FREE12SHIP',
            'discount' => '10'

        ]);
    }
}
