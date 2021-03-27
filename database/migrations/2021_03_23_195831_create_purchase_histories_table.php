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
            $table->integer("user_id")->unsigned();
            $table->integer("subscription_id")->unsigned();
            $table->integer("address_id")->unsigned();
            $table->integer("box_status_id")->unsigned();
            $table->string("description");
            $table->integer("shipping_date");
            $table->integer("tracking_number");

        });

        Schema::table('purchase_histories', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('box_status_id')->references('id')->on('box_statuses');

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
