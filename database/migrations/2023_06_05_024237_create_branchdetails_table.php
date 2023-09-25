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
        Schema::create('branchdetails', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->integer('zip_code');
            $table->unsignedBigInteger('number');
            $table->string('fax');
            $table->string('email');
            $table->string('holydays');
            $table->string('map');
            $table->string('status')->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branchdetails');
    }
};
