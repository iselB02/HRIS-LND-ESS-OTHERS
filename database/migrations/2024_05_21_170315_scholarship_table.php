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
        Schema::create('scholarship_infos', function (Blueprint $table) {
            $table->string('officedepartment')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->integer('type')->nullable();
            $table->text('address')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('position')->nullable();
            $table->string('course')->nullable();
            $table->string('term')->nullable();
            $table->integer('units')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_address')->nullable();
            $table->date('published_date')->default(DB::raw('CURRENT_DATE'));
            $table->string('status')->nullable();
            $table->text('remarks')->nullable();
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
