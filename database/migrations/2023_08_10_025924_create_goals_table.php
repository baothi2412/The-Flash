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
        Schema::create('goals', function (Blueprint $table) {
            $table->id('GoalID');
            $table->unsignedBigInteger('MatchID');
            $table->unsignedBigInteger('ScoringPlayer');
            $table->unsignedBigInteger('AssistingPlayer')->nullable();
            $table->string('Minute');
            $table->timestamps();
        
            $table->foreign('MatchID')->references('MatchID')->on('matches');
            $table->foreign('ScoringPlayer')->references('PlayerID')->on('players');
            $table->foreign('AssistingPlayer')->references('PlayerID')->on('players');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
