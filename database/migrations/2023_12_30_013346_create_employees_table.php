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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            //nepali
            $table->string('sanketno_np')->nullable();
            $table->string('emp_name_np')->nullable();
            $table->string('emp_post_np')->nullable();
            $table->string('contact_no_np')->nullable();
            $table->string('office_name_np')->nullable();     
            $table->string('emp_type_np');
            //english 
            $table->string('sanketno')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('emp_post')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('office_name')->nullable();     
            $table->string('emp_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
