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
        Schema::create('student_academics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('academic_year_id')->nullable();
            $table->unsignedBigInteger('education_level_id')->nullable();
            $table->unsignedBigInteger('classroom_id')->nullable();
            $table->string('registraion_number')->nullable();
            $table->string('roll_number')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->enum('is_current',[1,0])->default(0);
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade');
            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onUpdate('cascade');
            $table->foreign('education_level_id')->references('id')->on('education_levels')->onUpdate('cascade');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_academics');
    }
};
