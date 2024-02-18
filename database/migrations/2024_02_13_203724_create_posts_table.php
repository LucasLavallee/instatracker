<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('instagram_post_id', 20);
            $table->text('media_url');
            $table->text('thumbnail_url')->nullable();
            $table->text('caption')->nullable();
            $table->enum('media_type', ['IMAGE', 'VIDEO', 'CAROUSEL_ALBUM']);
            $table->string('permalink', 100);
            $table->dateTime('timestamp');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade');
            $table->unsignedBigInteger('instagram_user_id')->nullable();
            $table->foreign('instagram_user_id')
                ->references('id')
                ->on('instagram_users')
                ->onDelete('cascade');
            $table->timestamps();
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
