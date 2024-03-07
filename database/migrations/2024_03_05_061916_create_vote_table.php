<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
  "vote_owner" => "ahmed"

  "op1" => "Jeff Bezos"
  "op2" => "Elon Musk"

  "op1_counter" => "0"
  "op2_counter" => "0"

  "vote_deadline" => "2024-03-30"

*/

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->id();
            $table->string('vote_owner', 500)->default(false); // vote owner.
            $table->string('op1', 500)->default(false); // oponent 1
            $table->string('op2', 500)->default(false); // oponent 2

            //counters for oponents so the vote owner who wins.
            $table->integer('op1_counter')->default(false);
            $table->integer('op2_counter')->default(false);

            $table->date('vote_deadline'); // deadline of vote.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
