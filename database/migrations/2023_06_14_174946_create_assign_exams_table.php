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
        Schema::create('assign_exams', function (Blueprint $table) {
            $table->id();
            $table->integer('exam_terms');
            $table->integer('exam_part');
            $table->string('individual_part',10);
            $table->string('absent',10);
            $table->integer('marks_term');
            $table->integer('class');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_exams');
    }
};
