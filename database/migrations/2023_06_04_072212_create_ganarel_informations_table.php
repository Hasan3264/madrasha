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
        Schema::create('ganarel_informations', function (Blueprint $table) {
            $table->id();
            $table->string('eiin_no', 10);
            $table->string('institute_name', 150);
            $table->string('slogan', 150);
            $table->string('email', 150);
            $table->string('logo', 50);
            $table->text('short_des');
            $table->text('choosen_des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganarel_informations');
    }
};
