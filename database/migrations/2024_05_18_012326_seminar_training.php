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
        Schema::create('seminarTraining_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('location')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('description')->nullable();
            $table->integer('participants')->nullable();
            $table->text('pre_training')->nullable();
            $table->text('post_training')->nullable();
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
