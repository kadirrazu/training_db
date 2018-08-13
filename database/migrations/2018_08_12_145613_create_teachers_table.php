<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            
			
			$table->unsignedInteger('institute_id');
			$table->string('name_en');
			$table->string('name_bn');
			$table->unsignedInteger('designation_id');
			$table->unsignedInteger('subject_id');
			$table->string('mobile_en');
			$table->string('mobile_bn');
			$table->string('email');
			$table->binary('ict_training');
			$table->binary('hardware_training');
			$table->string('other_training');
			$table->string('batch');
			$table->string('fiscal_year');
			$table->string('obtained_mark');
			$table->string('grade');
			$table->timestamps();
			
			$table->foreign('designation_id')->references('id')->on('designations');
			$table->foreign('subject_id')->references('id')->on('subjects');
			$table->foreign('institute_id')->references('id')->on('institutes');
			
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
