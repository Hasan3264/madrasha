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
        Schema::create('allsession_academics', function (Blueprint $table) {
            $table->id();
            $table->string('name',25);
            $table->string('short_code',12);
            $table->string('physical_year',5);
            $table->string('current_session',5);
            $table->string('percentageterms')->nullable();
            $table->string('averageterms')->nullable();
            $table->string('averagesubject')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allsession_academics');
    }
};
