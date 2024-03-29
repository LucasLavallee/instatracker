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
        Schema::create('instagram_users', function (Blueprint $table) {
            $table->id();
            $table->string('instagram_user_id', 20);
            $table->string('username', 100);
            $table->dateTime('last_posts_update')->nullable();
            $table->text('access_token');
            $table->dateTime('token_expiration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instagram_users');
    }
};
