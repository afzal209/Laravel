<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name');
            $table->string('full_name');
            $table->string('name_of_mouth');
            $table->string('mountly_fee');
            $table->string('security');
            $table->string('addmission_fee');
            $table->string('total_fee');
            $table->string('admin_name');
            $table->string('issue_date');

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
        Schema::drop('fee_models');
    }
}
