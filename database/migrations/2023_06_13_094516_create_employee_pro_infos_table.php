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
        Schema::create('employee_pro_infos', function (Blueprint $table) {
            $table->id();
            $table->string('emp_type');
            $table->unsignedBigInteger('emp_type_id');
            $table->foreign('emp_type_id')->references('id')->on('employee_types')->onDelete('cascade');
            $table->string('designation');
            $table->unsignedBigInteger('desg_id');
            $table->foreign('desg_id')->references('id')->on('designations')->onDelete('cascade');
            $table->string('shift');
            $table->unsignedBigInteger('ws_id');
            $table->foreign('ws_id')->references('id')->on('working_shifts')->onDelete('cascade');
            $table->string('rank');
            $table->string('emp_id');
            $table->string('joining_date');
            $table->string('bank_acc_no');
            $table->string('prev_inst');
            $table->string('prev_des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_pro_infos');
    }
};
