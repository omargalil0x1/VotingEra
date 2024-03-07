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
        Schema::table('vote', function (Blueprint $table) {
            $table->string('public_voter_name')->default(false)->after('op2_counter');
            $table->string('public_voter_id')->default(false)->after('op2_counter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vote', function (Blueprint $table) {
            //
        });
    }
};
