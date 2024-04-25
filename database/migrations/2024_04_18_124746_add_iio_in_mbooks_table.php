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
        Schema::table('mbooks', function (Blueprint $table) {
            $table->string('cardname')->nullable();
            $table->string('cardnumber')->nullable();
            $table->date('expiredate')->nullable();
            $table->string('CVC')->nullable();
            $table->string('phoneNumber')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mbooks', function (Blueprint $table) {
            //
        });
    }
};
