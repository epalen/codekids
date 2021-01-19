<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description');
            $table->string('address');
            $table->string('phone', 10);
            $table->string('email', 45);
            $table->string('fb_link'); // Facebook
            $table->string('tw_link'); // Twitter
            $table->string('ins_link'); // Instagram
            $table->string('in_link'); // Linkedin
            //$table->string('pint_link'); // Pinterest
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
        Schema::dropIfExists('about');
    }
}
