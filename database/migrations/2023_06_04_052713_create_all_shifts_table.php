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
        Schema::create('all_shifts', function (Blueprint $table) {
            $table->id();
            $table->string('medium_name');
            $table->string('shift_name');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('green_limit');
            $table->string('orange_limit');
            $table->string('red_limit');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_shifts');
    }
};
