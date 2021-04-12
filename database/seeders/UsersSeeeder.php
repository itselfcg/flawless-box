<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Itzzy',
            'last_name' => 'Contreras',
            'email' => 'itselfcg@gmail.com',
            'password' => '$2y$10$z8WAhVUnqyCDm59xzf4VOOhYkRi3uL19XxNUfaBd8BxYmJS4EEBSa'
        ]);
    }
}
