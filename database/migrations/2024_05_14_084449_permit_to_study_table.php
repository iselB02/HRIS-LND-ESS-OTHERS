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
        Schema::create('Permit_To_Study_Table', function (Blueprint $table) {
            $table->id();
            $table->binary('CoverMemo')->nullable();
            $table->binary('RequestLetter')->nullable();
            $table->binary('PermitToStudy')->nullable();
            $table->binary('TeachingAssignment')->nullable();
            $table->binary('SummaryOfSchedule')->nullable();
            $table->binary('CertificationOfGrades')->nullable();
            $table->binary('StudyPlan')->nullable();
            $table->binary('FacultyEvaluation')->nullable();
            $table->binary('RatedIPCR')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('study', function (Blueprint $table) {
            //
        });
    }
};
