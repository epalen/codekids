<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('birthdate');
            $table->string('likes'); // Gustos y simpatías
            $table->string('talent'); // Su talento o fortaleza 
            $table->string('wishes'); // Deseos
            $table->text('description');
            $table->string('father_name');
            $table->string('f_doc_id');
            $table->string('f_phone')->nullable();
            $table->string('f_email')->nullable();
            $table->string('mother_name');
            $table->string('m_doc_id');
            $table->string('m_phone')->nullable();
            $table->string('m_email')->nullable();
            $table->string('family_income');
            $table->string('address');
            $table->string('city');
            $table->string('phone')->nullable();
            $table->string('ailment'); // Alergias, enfermedad, padecimiento, malestar.
            $table->string('medicines'); // Medicamentos
            $table->integer('group_id')->unsigned(); // Grupo de estudiantes.
            $table->foreign('group_id')
                  ->references('id')
                  ->on('groups')
                  ->onDelete('cascade');
            $table->integer('course_id')->unsigned(); // Relación cursos.
            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
                  ->onDelete('cascade');
            $table->string('goal'); // Meta
            $table->boolean('active')->unsigned()->nullable(); // Estado del candidato (Activo / Inactivo).
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
        Schema::dropIfExists('candidates');
    }
}
