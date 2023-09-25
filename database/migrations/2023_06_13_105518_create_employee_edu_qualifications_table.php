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
        Schema::create('employee_edu_qualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_code');
            $table->foreign('emp_code')->references('id')->on('employee_pro_infos')->onDelete('cascade');
            $table->string('emp_id');
            $table->string('institute_name');
            $table->string('country');
            $table->string('major_subject');
            $table->string('degree_name');
            $table->string('extra_qualifications')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_edu_qualifications');
    }
};
