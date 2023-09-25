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
        Schema::create('boardresults', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('t_student');
            $table->string('exam_type');
            $table->string('pass_student');
            $table->string('passes');
            $table->string('t_plass');
            $table->text('details');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boardresults');
    }
};
