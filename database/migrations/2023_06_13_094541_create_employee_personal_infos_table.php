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
        Schema::create('employee_personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->unsignedBigInteger('emp_code');
            $table->foreign('emp_code')->references('id')->on('employee_pro_infos')->onDelete('cascade');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('dob');
            $table->string('nid');
            $table->string('photo');
            $table->string('fb_link');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('marital_status');
            $table->string('religion');
            $table->string('blood_group');
            $table->string('gender');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_personal_infos');
    }
};
