<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BoxStatusesSeeder::class);
        $this->call(BoardMessagesSeeder::class);
        $this->call(PaymentMethodsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(SubscriptionStatusesSeeder::class);
        $this->call(SubscriptionPlansSeeder::class);
        $this->call(SubscriptionSeeder::class);

    }
}
