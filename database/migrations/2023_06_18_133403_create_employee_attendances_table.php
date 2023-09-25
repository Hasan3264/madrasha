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
        Schema::create('employee_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->unsignedBigInteger('emp_code');
            $table->foreign('emp_code')->references('id')->on('employee_pro_infos')->onDelete('cascade');
            $table->string('emp_id');
            $table->unsignedBigInteger('emp_type_id');
            $table->foreign('emp_type_id')->references('id')->on('employee_types')->onDelete('cascade');
            $table->unsignedBigInteger('desg_id');
            $table->foreign('desg_id')->references('id')->on('designations')->onDelete('cascade');
            $table->unsignedBigInteger('ws_id');
            $table->foreign('ws_id')->references('id')->on('working_shifts')->onDelete('cascade');
            $table->time('in_time')->nullable();
            $table->time('out_time')->nullable();
            $table->date('date')->nullable();
            $table->string('zone')->nullable();
            $table->string('leave')->nullable();
            $table->string('attend');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_attendances');
    }
};
