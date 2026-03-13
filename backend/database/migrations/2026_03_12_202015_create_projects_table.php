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
        Schema::create('projects', function (Blueprint $table) {
       $table->id();
        $table->string('title'); // Project Name [cite: 25]
        $table->text('description'); // Detailed description [cite: 25]
        $table->string('image')->nullable(); // Showcase image [cite: 25]
        $table->string('category'); // Filters: mobile, web, enterprise 
        $table->json('technologies'); // Technologies used (stored as array) [cite: 25]
        $table->string('link')->nullable(); // Live demo link
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
