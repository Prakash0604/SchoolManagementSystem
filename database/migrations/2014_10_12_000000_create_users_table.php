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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->string('join_date');
            $table->string('monthly_salary');
            $table->string('dob');
            $table->enum('gender',['male','female','others']);
            $table->string('guardains')->nullable();
            $table->string('experience')->nullable();
            $table->string('national_id')->nullable();
            // $table->string('')
            $table->unsignedBigInteger('religion_id')->nullable();
            $table->foreign('religion_id')->references('id')->on('religions')->onUpdate('cascade');


            $table->unsignedBigInteger('blood_group_id')->nullable();
            $table->foreign('blood_group_id')->references('id')->on('blood_groups')->onUpdate('cascade');

            $table->enum('user_type',['employee','student','guardians']);

            $table->string('education')->nullable();
            $table->string('home_address')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('registration_id');
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
