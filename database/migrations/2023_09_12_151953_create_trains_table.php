<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time', $precision=0);
            $table->time('arrival_time', $precision=0);
            $table->unsignedMediumInteger('train_code');
            $table->unsignedTinyInteger('carriages_number');
            $table->boolean('in_time')->default(true);
            $table->boolean('deleted')->default(true);
            $table->timestamps();
        });
    }



            


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
