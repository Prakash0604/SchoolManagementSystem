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
        Schema::create('student_attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade');

            $table->unsignedBigInteger('education_level_id');
            $table->foreign('education_level_id')->references('id')->on('education_levels')->onUpdate('cascade');

            $table->unsignedBigInteger('academic_year_id');
            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onUpdate('cascade');

            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onUpdate('cascade');

            $table->date('attendance_date');
            $table->enum('status',['P','L','A'])->default('P');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_attendances');
    }
};
