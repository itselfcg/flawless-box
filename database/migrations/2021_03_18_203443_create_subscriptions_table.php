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
            $table->date("starts_at");
            $table->date("expires_at");
            $table->boolean("is_active")->default(0);
            $table->boolean("is_auto_renewal")->default(0);
        });

        Schema::table('subscriptions', function($table) {
            $table->foreign('plan_id')->references('id')->on('subscription_plans');
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
