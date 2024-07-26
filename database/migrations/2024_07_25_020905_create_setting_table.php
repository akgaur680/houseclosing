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
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('header_logo');
            $table->string('footers_logo');
            $table->string('contact_no');
            $table->string('contact_address');
            $table->string('email');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('twitter_link');
            $table->string('copyright_content');
            $table->string('consultation_bar_title');
            $table->string('consultation_bar_description');
            $table->string('consultation_bar_button_label');
            $table->string('consultation_bar_button_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
