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
        Schema::create('rent', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start')->nullable(false);
            $table->dateTime('end')->nullable(false);
            $table->double('value')->nullable(false);
            $table->foreignId('driver_id')->constrained('driver');
            $table->foreignId('subsidiary_dest_id')->constrained('subsidiary');
            $table->foreignId('veicle_id')->constrained('veicle'); 
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
        Schema::dropIfExists('rent');
    }
};
