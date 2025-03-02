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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_email')->nullable();
            $table->string('student_dob');
            $table->string('registration_no')->nullable();
            $table->string('previous_school')->nullable();
            $table->string('student_contact');
            $table->string('student_address');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('student_gender',['Male','Female','Others']);

            $table->string('student_image')->nullable();
            $table->string('student_dicount')->nullable();
            $table->string('date_of_admission');

            $table->enum('academic_status',['Almuni','Dropout','Running'])->default('Running');
            $table->enum('status',['Active','Inactive'])->default('Active');

            $table->unsignedBigInteger('institute_id');
            $table->foreign('institute_id')->references('id')->on('institute_infos')->onUpdate('cascade');

            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onUpdate('cascade');

            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
