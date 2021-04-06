<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->insert([
            'name'=>'Maria Concepcion',
            'last_name'=>'De la Luz Perez',
            'street' => '777 7th Street',
            'city' => 'San diego',
            'state' => 'CA',
            'zip_code' => '92248',
            'phone_number' => '7602552233'

        ]);
    }
}
