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
        Schema::create('vote_members', function (Blueprint $table) {
            $table->id();
            $table->string("name", 500)->default(false);
            $table->string("title", 500)->default(false);
            $table->string("country", 500)->default(false);
            $table->string("symbol", 500)->default(false);
            $table->text("future")->default(false);
            $table->date("born_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote_members');
    }
};
