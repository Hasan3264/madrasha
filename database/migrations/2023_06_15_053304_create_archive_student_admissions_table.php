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
        Schema::create('archive_student_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('session_name');
            $table->string('shift_name');
            $table->string('class_name');
            $table->string('section_name');
            $table->string('device_serial')->nullable();
            $table->string('student_id')->unique();
            $table->string('tracking_id')->nullable();
            $table->string('roll_number');
            $table->string('rfid_card_no')->nullable();
            $table->string('attendance_sms')->nullable()->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archive_student_admissions');
    }
};
