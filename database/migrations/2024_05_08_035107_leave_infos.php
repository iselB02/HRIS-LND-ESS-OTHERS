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
        Schema::create('leave_infos', function (Blueprint $table) {
            $table->id();
            $table->string('officedepartment')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('position')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('filing_date')->nullable();
            $table->integer('salary')->nullable();
            $table->string('leave_type')->nullable();
            $table->string('details_leave')->nullable();
            $table->string('location')->nullable();
            $table->string('num_leaves')->nullable();
            $table->string('commutation')->nullable();
            $table->binary('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
