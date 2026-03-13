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
        Schema::create('inquiries', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // [cite: 36]
        $table->string('email'); // [cite: 36]
        $table->text('message'); // [cite: 36]
        $table->string('status')->default('pending'); // For Admin Panel tracking [cite: 45]
        $table->timestamps();
});
}

/**
 * Reverse the migrations.
 */
public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
