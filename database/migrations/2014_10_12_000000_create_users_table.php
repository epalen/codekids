<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->date('birthdate');
            $table->string('job_title')->nullable();            
            $table->string('likes')->nullable(); // Gustos y simpatías
            $table->longText('description')->nullable();
            $table->string('address')->nullable();
            $table->integer('province_id')->unsigned();//Provincia
            $table->foreign('province_id')
                  ->references('id')
                  ->on('provinces')
                  ->onDelete('cascade');
            $table->string('phone', 15)->nullable();
            $table->string('email')->unique();
            $table->string('fb_link')->nullable(); // Facebook
            $table->string('tw_link')->nullable(); // Twitter
            $table->string('ins_link')->nullable(); // Instagram
            $table->string('in_link')->nullable(); // Linkedin
            $table->string('git_link')->nullable(); // Github
            $table->string('avatar');
            $table->boolean('active');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
