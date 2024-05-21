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
        Schema::create('ipcr_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('officedepartment')->nullable();
            $table->string('position')->nullable();
            $table->integer('average')->nullable();
            $table->binary('application_form')->nullable();
            $table->date('published_date')->default(DB::raw('CURRENT_DATE'));
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
