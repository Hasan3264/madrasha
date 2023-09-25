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
        Schema::create('grade_m_odules', function (Blueprint $table) {
            $table->id();
            $table->integer('class_name');
            $table->integer('start_mark');
            $table->integer('end_mark');
            $table->string('grade_latter',2);
            $table->double('grade_point');
            $table->string('remarks',100);
            $table->enum('status',['active','inactive'])->default('active');
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_m_odules');
    }
};
