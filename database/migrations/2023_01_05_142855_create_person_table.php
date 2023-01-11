<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('person_type_id');
            $table->string('last_name')->nullable(false);
            $table->string('first_name')->nullable(false);
            $table->string('adrress')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->timestamps(); 


            $table->foreign('person_type_id')->references('id')->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
};
