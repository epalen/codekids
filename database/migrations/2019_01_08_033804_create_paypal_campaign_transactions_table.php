<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaypalCampaignTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypal_campaign_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->unsigned();
            $table->foreign('campaign_id')
                  ->references('id')
                  ->on('campaigns')
                  ->onDelete('cascade');  
            $table->string('payment_id');
            $table->string('intent');
            $table->string('state');
            $table->string('cart');
            $table->string('payment_method');
            $table->string('status');
            $table->string('payer_id');
            $table->string('payer_email');
            $table->string('payer_name');
            $table->string('payer_last_name');
            $table->string('payer_address');
            $table->string('payer_city');
            $table->string('payer_state');
            $table->string('payer_postal_code');
            $table->string('payer_country_code');
            $table->string('transaction_total');
            $table->string('transaction_fee');
            $table->string('transaction_currency');
            $table->string('merchant_id');
            $table->string('payee_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paypal_campaign_transactions');
    }
}
