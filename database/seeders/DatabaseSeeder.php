<?php

namespace Database\Seeders;

use App\Models\Payment;
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
        $this->call(BoardMessagesSeeder::class);
        $this->call(PaymentMethodsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(SubscriptionPlansSeeder::class);
        $this->call(CuponsSeeder::class);
        $this->call(UsersSeeeder::class);
        $this->call(AddressesSeeder::class);
        $this->call(PaymentsSeeder::class);
        $this->call(AccountsSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(PurchasesSeeder::class);





    }
}
