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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->integer('note');
            $table->unsignedBigInteger('user_mission_id');
            $table->foreign('user_mission_id')->references('id')->on('user__missions')->onDelete('cascade');
            $table->unsignedBigInteger('bilan_id');
            $table->foreign('bilan_id')->references('id')->on('bilans')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
