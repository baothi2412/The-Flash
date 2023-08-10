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
        Schema::create('matches', function (Blueprint $table) {
            $table->id('MatchID');
            $table->unsignedBigInteger('TournamentID');
            $table->dateTime('DateTimeStart');
            $table->dateTime('DateTimeEnd');
            $table->string('Stadium');
            $table->unsignedBigInteger('TeamA');
            $table->string('TeamAFormation');
            $table->unsignedBigInteger('TeamB');
            $table->string('TeamBFormation');
            $table->string('Score');
            $table->string('Type');
            $table->timestamps();
        
            $table->foreign('TournamentID')->references('TournamentID')->on('tournaments');
            $table->foreign('TeamA')->references('ClubID')->on('clubs');
            $table->foreign('TeamB')->references('ClubID')->on('clubs');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
