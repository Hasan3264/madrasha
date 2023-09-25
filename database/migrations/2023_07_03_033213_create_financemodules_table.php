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
        Schema::create('financemodules', function (Blueprint $table) {
            $table->id();
            $table->string('actype');
            $table->string('acCat');
            $table->string('acparents');
            $table->string('accode');
            $table->string('achead');
            $table->string('yarmont');
            $table->string('haschild');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financemodules');
    }
};
