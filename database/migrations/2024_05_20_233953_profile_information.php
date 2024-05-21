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
        Schema::create('profile_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('officedepartment')->nullable();
            $table->string('school')->nullable();
            $table->binary('cover_photo')->nullable();
            $table->binary('profile_photo')->nullable();
            $table->text('bio')->nullable();
            $table->string('phone_number')->nullable();
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
