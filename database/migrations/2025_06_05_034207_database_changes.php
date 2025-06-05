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
        Schema::table('users', function(Blueprint $table) {
            $table->string('name')->comment('username')->max(30)->change();
        });

        Schema::table('roles', function(Blueprint $table) {
            $table->string('name')->comment('A - Admin, C - Contributor, S - Subscriber')->max(1)->change();
        });

        Schema::table('posts', function(Blueprint $table) {
            $table->text('content')->comment('content of the post')->change();
            $table->text('featured_image')->comment('url of image')->change();
        });

        Schema::table('category', function(Blueprint $table) {
            $table->string('name')->comment('category of content')->max(30)->change();
        });

        Schema::table('tag', function(Blueprint $table) {
            $table->string('name')->comment('tag names')->max(45)->change();
        });

        Schema::table('comment', function(Blueprint $table) {
            $table->text('content')->comment('comments under content')->change();
            $table->string('name')->nullable()->change();
            $table->string('email')->nullable()->change();
        });

        Schema::table('tag', function(Blueprint $table) {
            $table->string('filetype')->comment('type of the file')->max(10)->change();
            $table->integer('filesize')->comment('size of the file')->default(0)->change();
            $table->string('description')->comment('description of the image')->nullable()->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('name')->comment('username')->change();
        });

        Schema::table('roles', function(Blueprint $table) {
            $table->string('name')->comment('A - Admin, C - Contributor, S - Subscriber')->change();
        });

        Schema::table('posts', function(Blueprint $table) {
            $table->text('content')->comment('content of the post')->change();
            $table->text('featured_image')->comment('url of image')->change();
        });

        Schema::table('category', function(Blueprint $table) {
            $table->string('name')->comment('category of content')->change();
        });

        Schema::table('tag', function(Blueprint $table) {
            $table->string('name')->comment('tag names')->change();
        });

        Schema::table('comment', function(Blueprint $table) {
            $table->string('content')->comment('comments under content')->change();
            $table->string('name')->nullable()->change();
            $table->string('email')->nullable()->change();
        });

        Schema::table('tag', function(Blueprint $table) {
            $table->string('filetype')->comment('type of the file')->change();
            $table->integer('filesize')->comment('size of the file')->change();
            $table->string('description')->comment('description of the image')->nullable()->change();
        });
    }
};
