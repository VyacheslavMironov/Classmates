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
        Schema::create('communities_links', function (Blueprint $table) {
            $table->id();
            $table->integer('community');
            $table->string('name');
            $table->string('url');
            $table->timestamps();
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
        Schema::dropIfExists('communities_links');
    }
};
