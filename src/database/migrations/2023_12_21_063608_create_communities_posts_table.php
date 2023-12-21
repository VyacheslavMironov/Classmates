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
        Schema::create('communities_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('owner');
            $table->integer('community');
            $table->string('description')
                ->nullable();
            $table->jsonb('attachments')
                ->nullable();
            $table->timestamps();
            $table->foreign('owner')
                ->references('id')
                ->on('users');
            $table->foreign('community')
                ->references('id')
                ->on('communities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities_posts');
    }
};
