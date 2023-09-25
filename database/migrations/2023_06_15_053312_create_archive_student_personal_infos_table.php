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
        Schema::create('archive_student_personal_infos', function (Blueprint $table) {
            $table->id();
             ///personal info
            $table->unsignedBigInteger('StudentInfo_id');
            $table->foreign('StudentInfo_id')->references('id')->on('archive_student_admissions')->onDelete('cascade');
            $table->string('student_name_en');
            $table->string('student_name_bn');
            $table->string('blood_group');
            $table->string('religion');
            $table->string('device_serial')->nullable();
            $table->string('student_id')->unique();
            $table->string('birth_date');
            $table->string('nationality');
            $table->string('gender');
            $table->string('photo')->nullable();

            ///contact info
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('present_address');
            $table->text('permanent_address')->nullable();

            ///parents info
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('father_nid')->nullable();
            $table->string('father_profession')->nullable();
            $table->string('father_designation')->nullable();
            $table->string('father_office_name_address')->nullable();
            $table->string('father_office_contact_no')->nullable();
            $table->string('php')->nullable();
            $table->string('father_photo')->nullable();

            $table->string('mother_name');
            $table->string('mother_phone');
            $table->string('mother_nid')->nullable();
            $table->string('mother_profession')->nullable();
            $table->string('mother_designation')->nullable();
            $table->string('mother_office_name_address')->nullable();
            $table->string('mother_office_contact_no')->nullable();
            $table->string('mother_photo')->nullable();


            // guardian / receiver info

            $table->string('guardian_receiver')->nullable();
            $table->string('guardian_profession')->nullable();
            $table->string('guardian_name');
            $table->string('guardian_designation')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('guardian_office_no')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_office_name_address')->nullable();
            $table->string('status')->default('active');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archive_student_personal_infos');
    }
};
