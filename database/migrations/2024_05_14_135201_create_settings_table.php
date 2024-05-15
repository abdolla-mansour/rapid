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
            $table->string('facebook')->default('https://www.facebook.com/satcksa1/');
            $table->string('linkedin')->default('https://www.linkedin.com/company/satcksa1/');
            $table->string('tweeter')->default('https://twitter.com/ksasatc?s=21&t=TaFC-CDVVOBrNbFAl0bW3g');
            $table->string('instagram')->default('https://www.instagram.com/satcksa1/');
            $table->string('snapchat')->default('https://www.snapchat.com/add/satcksa1?share_id=gxXhf6ky6Dw&locale=en-GB');
            $table->string('tiktok')->default('https://www.tiktok.com/@satcksa1?_t=8hvGd07hixs&_r=1');
            $table->string('whatsapp')->default('https://api.whatsapp.com/send/?phone=966112100490&text&type=phone_number&app_absent=0');
            $table->string('email')->default('info@rapidarabian.com');
            $table->string('phone')->default('00966112100490');
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
