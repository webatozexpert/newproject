<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardNosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_nos', function (Blueprint $table) {
            $table->id();
             $table->integer('division_id');
             $table->integer('district_id');
             $table->integer('upazila_id');
              $table->integer('union_id');
             $table->string('ward_no')->unique();
            $table->tinyInteger('status')->default('1');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('ward_nos');
    }
}
