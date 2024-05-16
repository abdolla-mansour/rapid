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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('tweeter');
            $table->string('instagram');
            $table->string('snapchat');
            $table->string('tiktok');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
