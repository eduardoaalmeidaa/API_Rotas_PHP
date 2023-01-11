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
        Schema::create('veicle', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate')->nullable(false);
            $table->string('vin')->nullable(false);
            $table->string('color')->nullable(false);
            $table->string('model')->nullable(false);
            $table->foreignId('veicletype_id')->constrained('veicletype');
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
        Schema::dropIfExists('veicle');
    }
};
