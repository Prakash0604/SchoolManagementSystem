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
        Schema::create('assign_exam_subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assign_exam_id');
            $table->foreign('assign_exam_id')->references('id')->on('assign_exams')->onUpdate('cascade');

            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onUpdate('cascade');
            $table->string('date')->nullable();
            $table->string('full_marks');
            $table->string('pass_marks');
            $table->string('start_at')->nullable();
            $table->string('end_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_exam_subjects');
    }
};
