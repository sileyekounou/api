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
        Schema::create('user_mission_taches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_mission_id');
            $table->unsignedBigInteger('tache_id');

            $table->foreign('user_mission_id')->references('id')->on('user_missions')->onDelete('cascade');
            $table->foreign('tache_id')->references('id')->on('taches')->onDelete('cascade');
            $table->unique(['user_mission_id', 'tache_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mission_taches');
    }
};
