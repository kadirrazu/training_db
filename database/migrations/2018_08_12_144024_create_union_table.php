<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('union', function (Blueprint $table) {
            $table->increments('id');
			$table->string('union_title')->unique();
			$table->unsignedInteger('upazila_id');
            $table->timestamps();
			
			$table->foreign('upazila_id')->references('id')->on('upazila');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('union');
    }
}
