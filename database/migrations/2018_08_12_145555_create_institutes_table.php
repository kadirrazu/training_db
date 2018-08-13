<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->increments('id');
			
			$table->string('eiin_en');
			$table->string('eiin_bn');
			$table->string('title_en');
			$table->string('title_bn');
			$table->string('address');
			$table->unsignedInteger('upazila_id');
			$table->unsignedInteger('union_id');
			$table->string('institute_head');
			$table->string('mobile_en');
			$table->string('mobile_bn');
			$table->string('phone');
			$table->string('email');
			$table->string('mpo_id');
			$table->string('year_of_est');
			$table->unsignedInteger('inst_type_id');
			
            $table->timestamps();
			
			$table->foreign('upazila_id')->references('id')->on('upazila');
			$table->foreign('union_id')->references('id')->on('union');
			$table->foreign('inst_type_id')->references('id')->on('institution_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
