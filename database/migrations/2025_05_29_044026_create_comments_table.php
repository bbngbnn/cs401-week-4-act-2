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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content')->comment('Content of the comment'); // Adding a comment for clarity
            $table->timestamp('date')->nullable()->comment('Date when the comment was made');
            $table->string('name')->comment('Name of the commenter'); // Adding a comment for clarity
            $table->string('email')->comment('Email of the commenter'); // Adding a comment for clarity
            $table->boolean('ishidden')->default(false)->comment('Indicates if the comment is hidden'); // Adding a comment for clarity
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
