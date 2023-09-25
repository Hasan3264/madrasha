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
        Schema::create('examworkingdays', function (Blueprint $table) {
            $table->id();
            $table->integer('exam_terms');
            $table->integer('class');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('working_days',150);
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
        Schema::dropIfExists('examworkingdays');
    }
};
