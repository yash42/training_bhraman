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
        Schema::create('officenames', function (Blueprint $table) {
            $table->id();
            // nepali
            $table->string('gov_level_np')->nullable(); //nullable means the field can have null value
            $table->string('ministryname_np')->nullable();
            $table->string('officename_np')->nullable();
            $table->string('provincename_np')->nullable();
            $table->string('officecode_np')->nullable();
            // English
            $table->string('gov_level')->nullable();
            $table->string('ministryname')->nullable();
            $table->string('officename')->nullable();
            $table->string('provincename')->nullable();
            $table->string('officecode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officenames');
    }
};
