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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('filename')->comment('Name of the media file'); // Adding a comment for clarity
            $table->string('filetype')->comment('Type of the media file (e.g., image, video, audio)'); // Adding a comment for clarity
            $table->integer('filesize')->comment('Size of the media file in bytes'); // Adding a comment for clarity
            $table->string('url')->unique()->comment('URL where the media file is stored'); // Adding a comment for clarity
            $table->timestamp('uploaddate_date')->nullable()->comment('Date when the media file was uploaded'); // Adding a comment for clarity
            $table->string('description')->nullable()->comment('Description of the media file'); // Adding a comment for clarity
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
