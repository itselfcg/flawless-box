<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_histories', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("account_id")->unsigned();
            $table->integer("subscription_id")->unsigned();
            $table->integer("address_id")->unsigned();
            $table->string("status");
            $table->string("description");
            $table->dateTime("shipping_date");
            $table->string("tracking_number")->nullable();

        });

        Schema::table('purchase_histories', function($table) {
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
            $table->foreign('address_id')->references('id')->on('addresses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_histories');
    }
}
