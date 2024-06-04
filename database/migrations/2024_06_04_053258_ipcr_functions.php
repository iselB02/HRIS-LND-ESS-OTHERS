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
        Schema::create('ipcr_functions', function (Blueprint $table) {
            $table->integer('ipcr_id')->nullable(); 
            $table->text('success_indicators')->nullable();
            $table->text('actual_accomplishments')->nullable();
            $table->integer('q')->nullable();
            $table->integer('e')->nullable();
            $table->integer('t')->nullable();
            $table->integer('a')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    
    public function down(): void
    {
        Schema::dropIfExists('ipcr_functions');

    }
};
