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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('desc');
            $table->string('experience');
            $table->string('location');
            $table->string('contact');
            $table->string('salary');
            $table->string('job_type');
            $table->string('deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
