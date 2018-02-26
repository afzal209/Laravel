<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('c_id')->unsigned();
            $table->string('st_class');
            $table->string('std_Admission_fee');
            $table->string('st_first_name');
            $table->string('st_last_name');
            $table->string('st_father_name');
            $table->string('st_father');
            $table->string('gender');
            $table->string('Address');
            $table->string('Mobile_Number');
            $table->timestamps();
        });

        Schema::table('student_models', function($table){


    $table->foreign('c_id')->references('id')->on('class_models');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_models');
    }
}
