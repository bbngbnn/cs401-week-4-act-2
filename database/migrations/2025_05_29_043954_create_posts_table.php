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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Post title'); // Adding a comment for clarity
            $table->text('content');
            $table->string('slug')->unique();
            $table->timestamp('publication_date')->nullable()->comment('Date when the post will be published');
            $table->timestamp('lastmodified')->nullable()->comment('Last modified date of the post');
            $table->string('status')->default('draft')->comment('Status of the post (draft, published, archived)');
            $table->string('featured_image')->nullable()->comment('URL of the featured image for the post');
            $table->integer('view_count')->default(0)->comment('Number of views the post has received');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
