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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key column
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->string('fullname'); // Full name of the user
            $table->date('date_of_birth'); // Date of birth
            $table->text('address'); // Address
            $table->string('avatar')->nullable(); // Path to the avatar image, can be nullable
            $table->string('job_title')->nullable(); // Job title, can be nullable
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
