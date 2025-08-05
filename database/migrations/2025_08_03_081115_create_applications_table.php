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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained()->onDelete('cascade');
            $table->string('full_name');
            $table->date('birth')->nullable();
            $table->string('nation_id');
            $table->string('nationality');
            $table->string('address');
            $table->enum('gender', ['Female','Male']);
            $table->enum('status', ['Single','Married','Divorced']);
            $table->enum('degree', ['Bachelors', 'Diploma', 'Divorced', 'Master', 'other']);
            $table->date('graduation');
            $table->string('major');
            $table->text('courses')->nullable();
            $table->text('experience')->nullable();
            $table->enum('employment_status', ['Unemployed','Employed'])->nullable();
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('fist_language');
            $table->string('first_language_level');
            $table->string('second_language')->nullable();
            $table->string('second_language_level')->nullable();
            $table->string('other_language')->nullable();
            $table->string('other_language_level')->nullable();
            $table->string('email');
            $table->string(column: 'phone');
            $table->string('cv_file');
            $table->string('front_national_id');
            $table->string('back_national_id');
            $table->enum('application_status', ['Seen','UnSeen'])->default('UnSeen');
             $table->softDeletes();

            $table->timestamps();





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
