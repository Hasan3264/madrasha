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
        Schema::create('monthlyfeeamounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('session_id');
            $table->unsignedBigInteger('medium_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('shift_id');
            $table->unsignedBigInteger('section_id');
            $table->string('gender');
            $table->integer('fee_type');
            $table->string('month');
            $table->integer('tutionfeeamount');
            $table->integer('tutionfeepayable');
            $table->integer('regfeeamount')->default(0);
            $table->integer('regfeepayable')->default(0);
            $table->integer('admisstionamount')->default(0);
            $table->integer('admisstionpayable')->default(0);
            $table->integer('examfeeamount')->default(0);
            $table->integer('examfeepayable')->default(0);
            $table->integer('total_amount');
            $table->integer('total_payable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthlyfeeamounts');
    }
};
