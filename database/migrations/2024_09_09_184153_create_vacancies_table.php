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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users
            $table->string('title');
            $table->text('description');
            $table->string('company');
            $table->string('image')->nullable(); // Nullable for optional images
            $table->decimal('salary', 10, 2)->nullable(); // Salary field
            $table->enum('type', ['remote', 'part-time', 'full-time','contract','internship']); // Job type
            $table->string('place'); // Location of the job
            $table->enum('status', ['open','frozen', 'closed']); // Job status
            $table->timestamp('opening_time'); // When the job posting was created
            $table->timestamp('closing_time')->nullable(); // When the job posting should end
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
