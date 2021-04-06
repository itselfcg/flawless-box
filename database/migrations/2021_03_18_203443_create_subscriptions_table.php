<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("plan_id")->unsigned();
            $table->integer("account_id")->unsigned();
            $table->string("status");
            $table->integer("payment_id")->unsigned();
            $table->dateTime("starts_at");
            $table->dateTime("expires_at");
            $table->dateTime("billing_date");
        });

        Schema::table('subscriptions', function($table) {
            $table->foreign('plan_id')->references('id')->on('subscription_plans');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('payment_id')->references('id')->on('payments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
