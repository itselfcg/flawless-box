<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name", 255);
            $table->text("description",255);
            $table->string("photo");
            $table->integer("duration");
            $table->decimal("monthly_price", 6, 2);
            $table->decimal("shipping", 6, 2);
            $table->integer("billing_period");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_plans');
    }
}
