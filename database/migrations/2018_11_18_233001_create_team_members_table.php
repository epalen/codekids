<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('job_title');            
            $table->string('likes'); // Gustos y simpatías
            $table->longText('description');
            $table->string('address');
            $table->string('city');
            $table->string('phone', 15);
            $table->string('email', 45);
            $table->string('fb_link'); // Facebook
            $table->string('tw_link'); // Twitter
            $table->string('ins_link'); // Instagram
            $table->string('in_link'); // Linkedin
            $table->string('avatar')->default('default.jpg');
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
        Schema::dropIfExists('team_members');
    }
}
