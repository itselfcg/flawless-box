<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id")->unsigned();
            $table->integer("address_id")->unsigned();
            $table->integer("subscription_id")->unsigned();
            $table->string("referral_code");
            $table->timestamps();
        });

        Schema::table('accounts', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('subscription_id')->references('id')->on('subscriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
